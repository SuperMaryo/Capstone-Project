<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A's Glass & Aluminum</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/svcWindow.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- JavaScript -->
    <script type="text/javascript" src="../static/js/homeScript.js"></script>
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
                    <li><a href="../views/homepage.php" >Home</a></li>
                    <li><a href="../views/products.php">Products</a></li>
                    <li><a href="../views/completed.php">Completed Projects</a></li>
                    <div class="dropdown">
                        <li><a style="font-weight: 600;">Services<i class="bi bi-chevron-compact-down"></i></a></li>
                        <div class="dropdown-content">
                            <a href="svcDoor.php">Door</a>
                            <a href="svcWindow.php" style="font-weight: 600;">Window</a>
                            <a href="otherSvc.php">Others</a>
                        </div>
                    </div>
                    <li><a href="../views/aboutpage.php">About</a></li>
                </ul>
            </nav>
        </div>
    </div> 
</div>
<!-- Sevices banner -->
<div class="services-page">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Window Installation</h1>
            </div>
        </div>
    </div>
</div>
<!-- Sliding Window Installation Details -->
<div class="svcWindow1">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Window/slidingwindow1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Sliding Aluminum Window</h2>
            </div>
        </div>
    </div>
</div>
<!-- Awning Window Installation Details -->
<div class="svcWindow2">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Window/awningwindow1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Awning Window/Casement</h2>
            </div>
        </div>
    </div>
</div>
<!-- Jalousie Window Installation Details -->
<div class="svcWindow3">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Window/jalousiewindow1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Jalousie Window</h2>
            </div>
        </div>
    </div>
</div>
<!-- Fixed Glass Window -->
<div class="svcWindow4">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Window/fixedglass1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Fixed Glass Window</h2>
            </div>
        </div>
    </div>
</div>
<!-- Showcase Glass Window -->
<div class="svcWindow5">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Window/showcaseWindow1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Showcase Glass Window</h2>
            </div>
        </div>
    </div>
</div>
<?php
    include "../includes/footer.php";
?>
</body>
</html>