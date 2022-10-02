
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
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Details</th>
                <th>Status</th>
                <th>Options</th>
                </tr>
        <?php 
             require "../connections.php";
             $conn = connection();

             $fetchdata = mysqli_query($conn, "SELECT * FROM product_info");
             while($row = mysqli_fetch_assoc($fetchdata)){
                    if($row["prod_qty"] > 0){
             
            ?>
                <tr>
                <td><?php echo $row["prod_id"]; ?></td>
                <td><?php echo $row["prod_name"]; ?></td>
                <td><?php echo $row["prod_categ"]; ?></td>
                <td><?php echo $row["prod_qty"]; ?></td>
                <td>₱<?php echo $row["prod_price"]; ?></td>
                <td><?php echo $row["prod_details"]; ?></td>
                <td><?php echo $row["prod_status"]; ?></td>
                <td><button type="button" class="editbtn">Edit</button><button type="button" class="deletebtn">Delete</button></td>
                </tr>
            <?php 
                    }
                }
                ?>
            </table>
        </div>
        <hr class="line">
        <!-- Uploading new item -->
        <div class="prodContent">
                <h2>Upload new products here</h2>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="details">
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Name</span>
                        <input type="text" name="ProdName" placeholder="Enter Product Name" required>
                    </div>
                    <div class="input-box">
                        <span class="formSpan">Product Category</span>
                        <select id="pcategory" class="pcateg" name="ProdCateg" required>
                            <option value="0"></option>
                            <option value="Mirror">Mirror</option>
                            <option value="Clothes Cabinet">Clothes Cabinet</option>
                            <option value="Kitchen Cabinet">Kitchen Cabinet</option>
                        </select>
                    </div>
                </div>
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Price</span>
                        <input type="number" placeholder="₱" name="ProdPrice" required>
                    </div>
                    <div class="input-box">
                        <span class="formSpan">Product Image</span>
                        <input type="file" name="fileToUpload" placeholder="Enter Product Image" required>
                    </div>
                </div>
                <div class="productForm">
                    <div class="input-box">
                        <span class="formSpan">Product Quantity</span>
                        <input type="number" placeholder="Enter product quantity" name="ProdQuan" required>
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
<!-- upload new items -->
<?php
    date_default_timezone_set('Asia/Manila');
    $date = date("Y/m/d : h:i:s");
        
      $ProductName = $ProductCategory = $ProductPrice = $ProductQuan = $ProductImg = $ProductDetails = "";
      $ProductNameErr = $ProductCategoryErr = $ProductPriceErr = $ProductQuanErr = $ProductImgErr = $ProductDetailsErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["ProdName"])){
            $ProductNameErr = "Product Name is required";
        }
        else {
            $ProductName = $_POST["ProdName"];
        }
        if(empty($_POST["ProdCateg"])){
            $ProductCategoryErr = "Category is required";
        }
        else {
            $ProductCategory = $_POST["ProdCateg"];
        }
        if(empty($_POST["ProdPrice"])){
            $ProductPriceErr = "Price is required";
        }
        else {
            $ProductPrice = $_POST["ProdPrice"];
        }
        if(empty($_POST["ProdQuan"])){
            $ProductQuanErr = "Quantity is required";
        }
        else {
            $ProductQuan = $_POST["ProdQuan"];
        }
        if(empty($_FILES["fileToUpload"])){
            $ProductImgErr = "Image is required";
        }
        else {
            $ProductImg = $_FILES["fileToUpload"]["name"];
        }
        if(empty($_POST["details"])){
             $ProductDetailsErr = "Details is required";
        }
        else {
            $ProductDetails = $_POST["details"];
        }

        if($ProductName){

            if($ProductQuan > 0){
                $status = "availabe";
            }
            else{
                $status = "Sold";
            }
            $target_dir = "../assets/Product_Assets/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
            // Check if image file is a actual image or fake image
            if(isset($_POST["upload"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            }
    
            // Check if file already exists
            if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
            }
    
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }
    
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
            }
    
            $ProdUpload = mysqli_query($conn, "INSERT INTO product_info (prod_name, prod_categ, prod_price, prod_qty, prod_details, prod_img, prod_status, date_added) VALUES ('$ProductName', ' $ProductCategory',  '$ProductPrice', '$ProductQuan', '$ProductDetails', '$ProductImg', '$status' , CURRENT_TIMESTAMP)");
            echo "  <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Product Uploaded',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(function () {

                    document.location.href = 'adminProd.php';
                    
                    });
                 </script>";
        }
    }

?>
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