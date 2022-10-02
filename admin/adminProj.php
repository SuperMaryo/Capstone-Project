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
    <h2>Project table</h2>
        <!-- Product table -->
        <div style="overflow-x:auto;">
            <table>
                <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Client Name</th>
                <th>Location</th>
                <th>Images</th>
                <th>Options</th>
                </tr>
                <?php  
                    require "../connections.php";
                    $conn = connection();

                    $fetchdata = mysqli_query($conn, "SELECT * FROM projects");
                    while($row = mysqli_fetch_assoc($fetchdata)){
                ?>
                <tr>
                <td><?php echo $row["proj_id"]; ?></td>
                <td><?php echo $row["proj_title"]; ?></td>
                <td><?php echo $row["proj_client"]; ?></td>
                <td><?php echo $row["proj_location"]; ?></td>
                <td><?php echo $row["proj_img"]; ?></td>
                <td><button type="button" class="apbtn">Edit</button><button type="button" class="rjbtn">Delete</button></td>
                </tr>

                <?php
                    } 
                ?>
            </table>
        </div>
        <hr class="line">
        <div class="upload-form">
            <h2>Upload Finished Projects Here</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="formContainer">
                    <div class="input-box">
                        <span class="formlabel">Project Title</span>
                        <input type="text" name="projTitle" placeholder="Enter project title here" required>
                    </div>
                    <div class="input-box">
                        <span class="formlabel">Client name</span>
                        <input type="text" name="clientName" placeholder="Enter Client name here">
                    </div>
                </div>
                <div class="formContainer">
                    <div class="input-box">
                        <span class="formlabel">Project Location</span>
                        <input type="text" name="location" placeholder="Enter project location here" required>
                    </div>
                    <div class="input-box">
                        <span class="formlabel">Project Photos</span>
                        <input type="file" name="fileToUpload" placeholder="Enter project photo here" required multiple accept="jpg">
                    </div>
                </div>
                <input type="submit" value="Save" name="upload">
            </form>
        </div>
        <hr class="line">
    </div>
</div>
<?php
    date_default_timezone_set('Asia/Manila');
    $date = date("Y/m/d : h:i:s");

    $projTitle = $clientName = $location = $projImg = "";
    $projTitleErr = $clientNameErr = $locationErr = $projImgErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["projTitle"])){
            $projTitleErr = "Title is required";
        }
        else {
            $projTitle = $_POST["projTitle"];
        }
        if(empty($_POST["clientName"])){
            $clientNameErr = "Client name is required";
        }
        else {
            $clientName = $_POST["clientName"];
        }
        if(empty($_POST["location"])){
            $locationErr = "location is required";
        }
        else {
            $location  = $_POST["location"];
        }
        if(empty($_FILES["fileToUpload"])){
            $projImgErr = "Image is required";
        }
        else {
            $projImg = $_FILES["fileToUpload"]["name"];
        }

        if($projTitle){
            $target_dir = "../assets/Projects_Assets/";
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
            $projUpload = mysqli_query($conn, "INSERT INTO projects (proj_title, proj_client, proj_location, proj_img, date_added)VALUES ('$projTitle', '$clientName', '$location', '$projImg', CURRENT_TIMESTAMP )");
            echo "  <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Project Uploaded',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(function () {

                    document.location.href = 'adminProj.php';
                    
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