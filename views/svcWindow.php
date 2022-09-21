<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/svcWindow.css">
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
                    <li><a href="../views/homepage.php" >Home</a></li>
                    <li><a href="../views/products.php">Products</a></li>
                    <li><a href="../views/completed.php">Completed Projects</a></li>
                    <div class="dropdown">
                        <li><a style="font-weight: 600;">Services<i class="bi bi-chevron-compact-down"></i></a></li>
                        <div class="dropdown-content">
                            <a href="#">Door</a>
                            <a href="#">Window</a>
                            <a href="#">Ceiling</a>
                            <a href="#">Cabinets</a>
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
                <h1>Window</h1>
            </div>
        </div>
    </div>
</div>
<!-- Window Services Details -->

</body>
</html>