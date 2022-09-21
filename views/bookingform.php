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
    <link rel="stylesheet" href="../static/css/adminpage.css">
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
                    <li><a href="../views/services.php">Services<i class="bi bi-chevron-compact-down"></i></a></li>
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
        <form action="">
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
                    <input type="email" placeholder="Enter Your Email Address" required>
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
                    <span class="input-titles">Home Visit Date:</span>
                    <input type="date" required>
                </div>
            </div>
            <div class="formContainer">
                <div class="input-box">
                    <span class="input-titles">Service Category</span>
                    <input type="radio" id="doorCateg" value="door" name="radioCat" onchange="doorSelect()">
                    <label for="doorCateg">Door</label>

                    <input type="radio" id="windowCateg" value="window" name="radioCat" onclick="windowSelect()">
                    <label for="windowCateg">Window</label>

                    <input type="radio" id="ceilingCateg" value="ceiling" name="radioCat" onclick="ceilingSelect()">
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
                    <!-- Window Selections -->
                    <select name="windowSelect" id="windowSelections">
                        <option value="0"></option>
                        <option value="1">Sliding Window Installation</option>
                        <option value="2">Swing window Installation</option>
                        <option value="3">Screen window Repair</option>
                        <option value="5">Glass window Re-alignment</option>
                    </select>
                    <!-- Ceiling Selections -->
                    <select name="ceilingSelect" id="ceilingSelections">
                        <option value="0"></option>
                        <option value="1">Sliding Door Installation</option>
                        <option value="2">Swing Door Installation</option>
                        <option value="3">Screen Door Installation</option>
                        <option value="4">Glass Door Repair</option>
                        <option value="5">Glass Door Re-alignment</option>
                    </select>
                    <span class="input-titles">Other Details</span>
                    <textarea name="sDetails" id="sDetails" cols="30" rows="10" placeholder="Other Details"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>