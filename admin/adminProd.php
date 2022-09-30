<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product</title>

    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="stylesheet" href="../static/css/adminProd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../sweetalert2/jquery-3.6.1.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    <script>
      function deleteStorage(){
        localStorage.clear();
      }
    </script>
</head>
<body>
<div class="container">
    <div class="side-nav">
        <div class="page-title">
            <h2>Admin Panel</h2>
        </div>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li style="background: #2fccf8;"><a href="adminProd.php">Products</a></li>
                <li><a href="adminProj.php">Projects</a></li>
                <li><a href="pending.php">Pending Requests</a></li>
                <br><br><br><br><br><br><br><br><br><br>
                <li><a href="#" class="lg-btn">Log Out</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- sweet alert log out modal -->
<script type="text/javascript">
      $('.lg-btn').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
        title: 'Are you sure',
        text: "You want to log out?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#2fccf8',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.value) {
                deleteStorage();
              document.location.href = "../logout.php";
          }
          else {
            result.dismiss === Swal.DismissReason.cancel
          }
    })
      })
</script>
<!-- Uploading new item -->
<div class="container2">
    <div class="small-container2">
    <h2>Product Table</h2>
        <!-- Product table -->
        <div style="overflow-x:auto;">
            <table>
                <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Product Details</th>
                <th>Option 1</th>
                <th>Option 2</th>
                </tr>
                <tr>
                <td>1</td>
                <td>Vanity Mirror</td>
                <td>Mirror</td>
                <td>3</td>
                <td>P4,000</td>
                <td>Dimentions and colors</td>
                <td><button type="button" class="editbtn">Edit</button></td>
                <td><button type="button" class="deletebtn">Delete</button></td>
                </tr>
            </table>
        </div>
        <hr class="line">
        <!-- Uploading new item -->
        <div class="prodContent">
                <h2>Upload new products here</h2>
        </div>
        <form action="" method="POST">
            <div class="details">
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Name</span>
                        <input type="text" placeholder="Enter Product Name" required>
                    </div>
                    <div class="input-box">
                        <span class="formSpan">Product Category</span>
                        <select name="pcategory" id="pcategory" class="pcateg" required>
                            <option value="0"></option>
                            <option value="Mirror">Mirror</option>
                            <option value="Clothes">Clothes Cabinet</option>
                            <option value="Kitchen">Kitchen Cabinet</option>
                        </select>
                    </div>
                </div>
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Price</span>
                        <input type="number" placeholder="₱" required>
                    </div>
                    <div class="input-box">
                        <span class="formSpan">Product Image</span>
                        <input type="file" placeholder="Enter Product Image" multiple="multiple" required>
                    </div>
                </div>
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Quantity</span>
                        <input type="number" placeholder="Enter product quantity" required>
                    </div>
                    <div class="input-box">
                        <span class="formSpan">Product Details</span>
                        <textarea name="details" id="" cols="30" rows="10" placeholder="Describe product"></textarea>
                    </div>
                </div>
                <div class="uploadBtn">
                    <input type="submit" value="Save" name="upload">
                </div>
            </div>
        </form>
        <hr class="line">
    </div>
</div>
<!-- sweetalert script -->
<script type="text/javascript">
      var alerted = localStorage.getItem('alerted') || '';
      if (alerted != 'yes') {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Logged In!',
            showConfirmButton: false,
            timer: 1500
            })
        localStorage.setItem('alerted','yes');
      }
</script>
</body>
</html>