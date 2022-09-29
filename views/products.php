<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/products.css">
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
                    <li><a href="../views/products.php" style="font-weight: 600;">Products</a></li>
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
<!-- product page banner -->
<div class="product-page">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1>Products</h1>
            </div>
        </div>
    </div>
</div>
<!-- Product Content -->
<div class="prodContainer">
    <div class="prodCard">
        <div class="prodImg">
            <img src="../assets/Product_Assets/Mirror/2003-vanitymirror1.jpg" alt="">
        </div>
        <div class="smallContainer">
            <h4><b>Vanity Mirror</b></h4>
            <P>Mirror</P>
            <p class="price">₱4,000</p>
            <button href="#" class=orderbtn >Buy Now</button>
            <hr class="line">
            <P class="avl">available: </P>
        </div>
    </div>
</div>
</body>
</html>
