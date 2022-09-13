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
<div class="bookContainer">
    <div class="bookform">
        <div class="small-container">
            <div class="title">Book here!</div>
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="First Name" name="firstname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Last Name" name="Lastname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Email" name="Uemail" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel" placeholder="Phone number" name="pnum" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="Street" name="Ustreet" required>
                        <input type="text" placeholder="Barangay" name="Ubrgy" required>
                        <input type="text" placeholder="Municipality" name="Ucity" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Area Visit Date</span>
                        <input type="date" placeholder="" name="visitdate" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>