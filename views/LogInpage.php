<?php

include_once "../connections.php";

$conn = connection();

$unameErr = $passwrdErr = "";

$uname = $password = "";

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
        $checkUname = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname' ");
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
                    header("Location: admin/index.php");
                }else{
                    header("Location: homepage.php");
                }
            }
            else {
                    echo "<script>alert('./.'); </script>";
                 }
        }
    }
    else
        {
            echo "<script>alert('./.');</script>";
        }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/login.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
    <!-- cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="../views/startpage.html"><img src="../assets/Global_Assets/A's Logo.png" width="140px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="../views/homepage.php">Home</a></li>
                        <li><a href="../views/products.html">Products</a></li>
                        <li><a href="../views/aboutpage.html">About</a></li>
                        <li><a href="../views/contactpage.html">Contact</a></li>
                        <div class="dropdown">
                        <li><a href="">Account</a>
                            <div class="dropdown-content">
                                <a href="../views/LogInpage.php">Log In</a>
                                <a href="../views/registerpage.php">Register</a>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<div class="lgnContainer">
    <div class="lgnfrm">
        <div class="lgnsmall-container">
            <div class="title">Log In</div>
            <form method="POST">
                <div class="lgn-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="usrname" placeholder="Enter your username">
                        <span class="error"><?php echo $unameErr?></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwrd" placeholder="Enter your password">
                        <span class="error"><?php echo $passwrdErr?></span>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Log In">
                </div>
                <p>Don't have an account?</p>
                <li class="rgstrnw"><a class="rgstr" href="../views/registerpage.php">Register Now</a></li>
             </form>
          </div>
      </div>
</div>
<!-- footer -->
<div class="footer">
    <div class="ftcontainer">
        <div class="row">
            <div class="footer-col-1">
                <h3>Where we are?</h3>
                <ul>
                    <li><a href="https://www.google.com/maps/place/Calansayan,+San+Jose,+Batangas/@13.8530923,121.0842163,14.27z/data=!4m5!3m4!1s0x33bd121e614fc5c3:0x8133cc2b344769da!8m2!3d13.8543867!4d121.0936983">
                        We are located at Calansayan, San Jose , Batangas</a></li>
                </ul>
            </div>
            <div class="footer-col-2">
                <img src="../assets/Global_Assets/A's Logo.png">
                <p>Home Improvement with high quality and affordable Glass & Aluminum Products.</p>
            </div>
            <div class="footer-col-3">
                <h3>Follow Us</h3>
            <ul>
                <li><a href="https://web.facebook.com/AtienzasGlassandAluminum">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
            </div>
        </div>
        <hr>
    <div class="bottoms">
        <ul><li><a href="">Terms and Conditions</a></li></ul>
        <p>©2022 | Batangas State University Student's.</p>
        <ul><li><a href="">Privacy and Policy</a></li></ul>
    </div>
    </div>
</div>
</body>
</html>