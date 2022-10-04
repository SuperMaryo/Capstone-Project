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
    <link rel="stylesheet" href="../static/css/home.css">
    <!-- fonts -->
    <link rel="stylesheet" href="../static/css/adminpage.css">
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
                    <li><a href="../views/homepage.php" style="font-weight: 600;">Home</a></li>
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
<!-- Home Banner -->
<div class="home">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Welcome to A's Glass & <br>Aluminum Works</h1>
                <p>We offer high quality service together <br> with high quality products</p>
                <a href="../views/bookingform.php" class="btn">Book Now</a>
                <a href="../views/aboutpage.php" class="btn">Read More</a>
            </div>
            <div class="col-2">
                <img src="../assets/Global_Assets/glass-building.png">
            </div>
        </div>
    </div>
</div>
<!-- Our Products -->
<div class="products">
    <div class="small-container1">
        <h2 class="title">Our Products</h2>
        <div class="row1">
            <div class="product-content">
                <div class="content-img">
                    <img src="../assets/Home_Assets/products/vanitymirror1.jpg" alt="vanity">
                    <h4>Vanity Mirror</h4>
                    <a href="#" class="order-btn">Order Now</a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/products/kitchencab1.jpg" alt="kcabinet">
                    <h4>Kitchen Cabinet</h4>
                    <a href="#" class="order-btn">Order Now</a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/products/clothescab1.jpg" alt="Ccabinet">
                    <h4>Clothes Cabinet</h4>
                    <a href="#" class="order-btn">Order Now</a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/products/readymirror1.jpg" alt="Rmirror">
                    <h4>Ready made mirror</h4>
                    <a href="#" class="order-btn">Order Now</a>
                </div>
            </div>
            <a href="../views/products.php" class="view-btn">View More<i class="bi bi-chevron-double-right"></i></a>
        </div>
    </div>
</div>
<!-- Services -->
<div class="services">
    <div class="small-container1">
        <h2 class="title">Our Services</h2>
        <div class="row2">
        <div class="col-4">
        <button id="but1" onclick="openDoor()">Door</button>
        <button id="but2" onclick="openWindow()">Window</button>
        <button id="but3" onclick="openProduct()">Other</button>
        <hr>
        </div>
            <!-- Door tab -->
            <div id="content1" class="services-content">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/door/slidingdoor1.jpg" alt="sliding door">
                    <h4>Installation of sliding door</h4>
                    <a href="../views/svcDoor.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/door/swingdoorwF.jpg " alt="swingdoorw/frame">
                    <h4>Installation of swing door with frame</h4>
                    <a href="../views/svcDoor.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/door/screendoor1.jpg " alt="swingdoorw/oframe">
                    <h4>Installation of screen door</h4>
                    <a href="../views/svcDoor.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/door/doorrealignment.jpg " alt="Realignment">
                    <h4>Glass door re-alignment</h4>
                    <a href="../views/svcDoor.php#doorRepair" class="view-btn2" style="margin-top: 40px;">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
            </div>
            <!-- window tab -->
            <div id="content2" class="services-content">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/window/slidingwindow1.jpg" alt="sliding window">
                    <h4 >Installation of sliding window</h4>
                    <a href="../views/svcWindow.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/window/awningwindow1.jpg " alt="awning window">
                    <h4 >Installation of awning window</h4>
                    <a href="../views/svcWindow.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/window/jalousiewindow1.jpg " alt="swingdoorw/oframe">
                    <h4>Installation of jalousie window</h4>
                    <a href="../views/svcWindow.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/window/fixedglass1.jpg " alt="Realignment">
                    <h4>Installation of fixed glass window</h4>
                    <a href="../views/svcWindow.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
            </div>
            <!-- Products installation tab -->
            <div id="content3" class="services-content">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/product/gymmirror1.jpg" alt="gym mirror">
                    <h4>Installation of Gym Mirrors</h4>
                    <a href="../views/services.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/product/partition1.jpg " alt="drywall partitions">
                    <h4>Installation of drywall partitions</h4>
                    <a href="../views/services.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/product/ceiling1.jpg " alt="swingdoorw/oframe">
                    <h4>Installation of all kinds of ceiling</h4>
                    <a href="../views/services.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
                <hr class="vertical">
                <div class="content-img">
                    <img src="../assets/Home_Assets/Services/product/kitchencabinet1.jpg" alt="Realignment">
                    <h4>Installation of kitchen Cabinets</h4>
                    <a href="../views/services.php" class="view-btn2">View More<i class="bi bi-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us -->
<div class="about">
    <div class="small-container">
    <h2 class="title">About Us</h2>
        <div class="row">
            <div class="col-2-5">
                <p>Founded  in 2015, A’s Glass and Aluminum aims to bring you the most precise solutions for your architectural needs. Specializing in the supply of a variety of hardware for office fit-out projects – we design, supply, deliver and install an extensive range of products such as glass fittings and accessories,
                     movable glass partition systems and door equipment….</p>
                <a href="../views/aboutpage.php" class="btn">Read More</i></a>
            </div>
            <div class="col-2-5">
                <img class="about-img" src="../assets/Home_Assets/Imgs/abthouse.jpg">
            </div>
        </div>
    </div>
</div>
<!-- why choose us -->
<div class="whyUs">
    <div class="small-container">
    <h2 class="title">Why Choose Us?</h2>
        <div class="row">
            <div class="col-5">
                <i class="bi bi-tools"></i>
                <h3>Low Maintenance</h3>
                <p class="why">Recognizing the unique requirements of our clients and service each as an individual.</p>
                <br>
            </div>
            <div class="col-5">
                <i class="bi bi-award"></i>
                <h3>Best Quality</h3>
                <p class="why">We offer the best quality to our clients and a wide range of glass types available.</p>
                <br>
            </div>
            <div class="col-5">
                <i class="bi bi-check2-all"></i>
                <h3>Custom Made</h3>
                <p class="why">Our products are custom & Beveled Designed which are made according your expectations.</p>
            </div>
        </div>   
    </div>
</div>
<?php
    include "../includes/footer.php";
?>
</body>
</html>