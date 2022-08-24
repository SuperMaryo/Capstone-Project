<?php

include_once "../connections.php";

$conn = connection();

$unameErr = $passwrdErr = "";

$name = mysqli_query ($conn, "SELECT * FROM user");

while($fetchuser = mysqli_fetch_assoc($name)){
    $uname = $fetchuser['username'];
    $upasswrd = $fetchuser['password'];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($uname == $_POST["usrname"] && $upasswrd == $_POST["passwrd"])
{
  echo "<script> location.href = 'homepage.html' </script>";
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
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                        <li><a href="../views/homepage.html">Home</a></li>
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
                        <input type="text" name="usrname" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwrd" placeholder="Enter your password" required>
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