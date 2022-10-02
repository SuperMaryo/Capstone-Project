<?php

require "../connections.php";

$conn = connection();

$unameErr = $passwrdErr = "";

$uname = $password = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/login.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../sweetalert2/jquery-3.6.1.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-50">
            <img src="../assets/Global_Assets/Login.png" style="width: 500px;">
        </div>
        <div class="col-50">
        <div class="title">Log In Here</div>
            <form method="POST">
                <div class="lgn-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="usrname" placeholder="Enter your username" value="">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwrd" placeholder="Enter your password">
                        <span style="color: #555; font-size: 13px;">password is case sensitive</span>
                    </div>
                </div>
                <li><a class="rgstr" href="#">Forgot Password?</a></li>
                <div class="button">
                    <input type="submit" value="Log In">
                </div>
             </form>
            <!-- form validations -->
            <?php

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                // username
                if(empty(($_POST["usrname"]))) {
                    $unameErr = "Username is required";
                }else 
                {
                    $uname = $_POST["usrname"];
                }

                if(empty($_POST["passwrd"])){
                    $passwrdErr = "Password is required";
                }else
                {
                    $password = $_POST["passwrd"];
                }

                if($uname && $password){
                    $checkUname = mysqli_query($conn, "SELECT * FROM adminuser WHERE username = '$uname' ");
                    $checkUnameRow = mysqli_num_rows($checkUname);

                    if($checkUnameRow > 0) {
                        while($row = mysqli_fetch_assoc($checkUname)) {
                            $usr_id = $row["id"];
                            $usr_password = $row["password"];
                            $usr_role = $row["role"];
                        }

                        if(md5($password) == $usr_password){
                            session_start();

                            $_SESSION['role'] = $usr_role;
                            $_SESSION['id'] = $usr_id;

                            if($usr_role == "1") {
                                header("Location: ../admin/dashboard.php");
                            }
                        }
                        else {
                            echo "<script>Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Your password is incorrect!',
                                confirmButtonColor: '#2fccf8'
                                })</script>";
                            }
                }
                else
                    {
                        echo "<script>Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'You email is incorrect!',
                            confirmButtonColor: '#2fccf8'
                            })</script>";
                    }
                }
                }
                ?>
        </div>
    </div>
</div>
</body>
</html>