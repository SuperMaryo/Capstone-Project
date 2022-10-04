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
    <link rel="stylesheet" href="../static/css/otherSvc.css">
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
                            <a href="svcWindow.php">Window</a>
                            <a href="otherSvc.php" style="font-weight: 600;">Other</a>
                        </div>
                    </div>
                    <li><a href="../views/aboutpage.php">About</a></li>
                </ul>
            </nav>
        </div>
    </div> 
</div>
<!-- Other Services Installation Banner -->
<div class="services-page" id="doorInstall">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Other Services</h1>
            </div>
        </div>
    </div>
</div>
<!-- Mirror Services Details -->
<div class="svcOther1">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Others/wallmirror1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>All kinds of mirror's</h2>
            </div>
        </div>
    </div>
</div>
<!-- Ceiling Services Details -->
<div class="svcOther2">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Others/ceiling1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Ceiling's</h2>
            </div>
        </div>
    </div>
</div>
<!-- Built In Cabinets Services Details -->
<div class="svcOther3">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Others/clothesCabinet.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Built-in Clothes Cabinet's</h2>
            </div>
        </div>
    </div>
</div>
<!-- Built In Kitchen Cabinets Services Details -->
<div class="svcOther4">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Others/kitchencabinet1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Built-in Kitchen Cabinet's</h2>
            </div>
        </div>
    </div>
</div>
<!-- Built In Kitchen Cabinets Services Details -->
<div class="svcOther5">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/Services_Assets/Others/glasspartition1.jpg" alt="">
            </div>
            <div class="col-3">
                <h2>Drywall Glass Partition's</h2>
            </div>
        </div>
    </div>
</div>
<?php
    include "../includes/footer.php";
?>
</body>
</html>