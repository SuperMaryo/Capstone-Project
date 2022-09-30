<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="stylesheet" href="../static/css/adminProj.css">
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
                <li><a href="adminProd.php">Products</a></li>
                <li  style="background: #2fccf8;"><a href="adminProj.php">Projects</a></li>
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
<!-- Project Upload form -->
<div class="container2">
    <div class="small-container2">
    <h2>Projects table</h2>
        <!-- Product table -->
        <div style="overflow-x:auto;">
            <table>
                <tr>
                <th>Project ID</th>
                <th>Project Title</th>
                <th>Client Name</th>
                <th>Details</th>
                <th>Project Images</th>
                <th>Option 1</th>
                <th>Option 2</th>
                </tr>
                <tr>
                <td>1</td>
                <td>Home Renovation</td>
                <td>Marnel Valentin</td>
                <td>Kumintang Ilaya</td>
                <td>img</td>
                <td><button type="button" class="apbtn">Edit</button></td>
                <td><button type="button" class="rjbtn">Delete</button></td>
                </tr>
            </table>
        </div>
        <hr class="line">
        <div class="upload-form">
            <h2>Upload Finished Projects Here</h2>
            <form action="">
                <div class="formContainer">
                    <div class="input-box">
                        <span class="formlabel">Project Title</span>
                        <input type="text" placeholder="Enter project title here" required>
                    </div>
                    <div class="input-box">
                        <span class="formlabel">Client name (Optional)</span>
                        <input type="text" placeholder="Enter Client name here">
                    </div>
                </div>
                <div class="formContainer">
                    <div class="input-box">
                        <span class="formlabel">Project Details</span>
                        <input type="text" placeholder="Enter project details here" required>
                    </div>
                    <div class="input-box">
                        <span class="formlabel">Project Photos</span>
                        <input type="file" placeholder="Enter project photo here" required multiple accept="jpg">
                    </div>
                </div>
                <input type="submit" value="Save" name="upload">
            </form>
        </div>
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