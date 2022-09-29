<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        $_SESSION["email"] = $_POST["email"];
        echo "<script> window.location.href = 'otp.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/bookform.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- JavaScript -->
    <script src="../static/js/bookScript.js"></script>
</head>
<body>

    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="../views/homepage.php"><img src="../assets/Global_Assets/A's Logo.png" width="50px"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="../views/homepage.php">Home</a></li>
                    <li><a href="../views/products.php">Products</a></li>
                    <li><a href="../views/completed.php">Completed Projects</a></li>
                    <div class="dropdown">
                        <li><a>Services<i class="bi bi-chevron-compact-down"></i></a></li>
                        <div class="dropdown-content">
                            <a href="svcDoor.php">Door</a>
                            <a href="svcWindow.php">Window</a>
                            <a href="otherSvc.php">Other</a>
                        </div>
                    </div>
                    <li><a href="../views/aboutpage.php">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Bookform banner -->
<div class="services-page">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Book here</h1>
            </div>
        </div>
    </div>
</div>
<div class="bookContainer">
    <div class="bookform">
        <form action="" method="post">
            <div class="formContainer">
                <div class="input-box">
                    <span class="input-titles">First Name</span>
                    <input type="text" placeholder="Enter Your First Name" required>
                </div>
                <div class="input-box">
                    <span class="input-titles">Last Name</span>
                    <input type="text" placeholder="Enter Your Last Name" required>
                </div>
            </div>
            <div class="formContainer">
                <div class="input-box">
                    <span class="input-titles">Email Address</span>
                    <input name="email" type="email" placeholder="Enter Your Email Address" required>
                </div>
                <div class="input-box">
                    <span class="input-titles">Phone Number</span>
                    <input type="tel" placeholder="Enter Your Phone Number" required>
                </div>
            </div>
            <div class="formContainer">
                <div class="input-box">
                    <span class="input-titles">Address</span>
                    <input type="text" placeholder="Street" required>
                    <input type="text" placeholder="Barangay" required>
                    <input type="text" placeholder="Municipality" required>
                </div>
                <div class="input-box">
                    <span class="input-titles">Area Visit Date:</span>
                    <input type="date" required>
                </div>
            </div>
            <div class="formContainer">
                <div class="input-box">
                    <span class="input-titles">Service Category</span>
                    <input type="radio" id="doorCateg" value="1" name="radioCat" onclick="doorSelect(this)">
                    <label for="doorCateg">Door</label>

                    <input type="radio" id="windowCateg" value="2" name="radioCat" onclick="windowSelect()">
                    <label for="windowCateg">Window</label>

                    <input type="radio" id="ceilingCateg" value="3" name="radioCat" onclick="ceilingSelect()">
                    <label for="ceilingCateg">Ceiling</label>

                    <span class="input-titles">Service Type</span>
                    <select name="doorSelect" id="doorSelections">
                        <option id="option1" value="0"></option>
                        <option id="option2" value="1">Sliding Door Installation</option>
                        <option value="2">Swing Door Installation</option>
                        <option value="3">Screen Door Installation</option>
                        <option value="4">Glass Door Repair</option>
                        <option value="5">Glass Door Re-alignment</option>
                    </select>
                    <span class="input-titles">Other Details</span>
                    <textarea name="sDetails" id="sDetails" cols="30" rows="10" placeholder="Other Details"></textarea>
                </div>
            </div>
            <input type="submit" name="submit" value="submit" class="bksubmit">
        </form>
    </div>
</div>

</body>
</html>