<?php

include_once "../connections.php";

$conn = connection();

if(isset($_POST['submit'])){
    $fname = $_POST['fullname'];
    $usrname = $_POST['username'];
    $emailid = $_POST['email'];
    $pnum = $_POST['pnumber'];
    $password = $_POST['password_1'];
    $gender = $_POST['gender'];

    // encrypting password

    $hash_pass = md5($password);
    $sql ="INSERT INTO `user`(`name`, `username`, `email`, `phonenumber`, `password`, `gender`) VALUES 
    ('$fname', '$usrname', '$emailid', '$pnum', '$hash_pass', '$gender')";

    $conn->query($sql) or die ($conn->error);

    echo header("Location: LogInpage.php");
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/register.css">
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
                        <li><a href="../views/homepage.php">Home</a></li>
                        <li><a href="../views/products.html">Products</a></li>
                        <li><a href="../views/aboutpage.html">About</a></li>
                        <li><a href="../views/contactpage.html">Contact</a></li>
                        <div class="dropdown">
                        <li><a href="">Account</a></li>
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
<div class="rgstrcontainer">
    <div class="Rgstrfrm">
        <div class="small-container">
            <div class="title">Registration</div>
            <form action="#" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="fullname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" placeholder="Enter your phone number" name="pnumber" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" name="username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="password_1" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm your password" name="password_2" required>
                    </div>
                </div>
                <div class="user-gender">
                    <input type="radio" name="gender" value="male" id="dot-1" required>
                    <input type="radio" name="gender" value="female" id="dot-2" required>
                    <input type="radio" name="gender" value="" id="dot-3" required>
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Register">
                </div>
                <div class="already">
                    <p>Already have an account?</p><span><a class="alrdy" href="LogInpage.php"> Log in.</a></span>
                </div>
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