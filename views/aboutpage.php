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
    <link rel="stylesheet" href="../static/css/about.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- JavaScript -->
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
                    <li><a href="../views/aboutpage.php" style="font-weight: 600;">About</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- About US banner -->
<div class="about-page">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- When did we start -->
<div class="whenWestart">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/AboutUs_Assets/aboutGlass1.jpg">
            </div>
            <div class="col-3">
                <h2>When did we start?</h2>
                <p>Founded  in 2015, A’s Glass and Aluminum aims to bring you the most precise solutions for your architectural needs. Specializing in the supply of a variety of hardware for office fit-out projects – we design, supply, deliver and install an extensive range of products such as glass fittings and accessories, movable glass partition systems and door equipment.</p><br>
            </div>
        </div>
    </div>
</div>
<!-- Whatdo we have -->
<div class="whatWehave">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <h2>What do we have?</h2>
                <p>We have a wealth of experience and service to match your needs, and can work with you to find the perfect project or repair. We are locally owned and operated, so you’ll know you’re receiving magnificent service with outstanding results.</p>
            </div>
            <div class="col-3">
                <img src="../assets/AboutUs_Assets/aboutAluminum1.jpg">
            </div>
        </div>
    </div>
</div>
<!-- About Missions -->
<div class="OurMission">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <img src="../assets/AboutUs_Assets/mission2.jpg">
            </div>
            <div class="col-3">
                <h2>Our Mission Statement</h2>
                <p>Our aim is to provide an efficient cost effective service to all sectors through:</p>
                <ul>
                    <li>Manufactures of windows, doors, showers doors, curtain walls and shopfronts.</li>
                    <li>Design and construct architectural aluminum to design.</li>
                    <li>Service and repair all types of aluminum frames.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Our Directors -->
<div class="OurDirectors">
    <div class="small-container2">
        <div class="row">
            <div class="col-3">
                <h2>Our Directors</h2>
                <p>Our Directors are committed to giving each client individual attention.</p>
                <br><br>
                <h3>Our Directors are:</h3>
                <h3>Nelson Atienza - Chief Executive Officer</h3>
                <h3>Nexon Atienza - Operations Director</h3>
            </div>
            <div class="col-3">
                <img src="../assets/AboutUs_Assets/aboutmirror.jpg">
            </div>
        </div>
    </div>
</div>
<?php
    include "../includes/footer.php";
?>
</html>
</body>
</html>