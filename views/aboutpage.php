<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- CDN -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/start.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <li><a href="../views/homepage.php">Home<span class="line">|</span></a></li>
                    <li><a href="../views/products.php">Products<span class="line">|</span></a></li>
                    <li><a href="../views/completed.php">Completed Projects<span class="line">|</span></a></li>
                    <li><a href="../views/services.php">Services<i class="bi bi-chevron-compact-down"></i><span class="line">|</span></a></li>
                    <div class="dropdown">
                        <li><a href="">Account<i class="bi bi-chevron-compact-down"></i></a></li>
                            <div class="dropdown-content">
                                <a href="#">User Profile<i class="bi bi-person-circle"></i></a>
                                <a href="../logout.php">Log out<i class="bi bi-box-arrow-in-right"></i></a>
                            </div>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</div>
</body>
</html>