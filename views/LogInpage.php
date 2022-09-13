
<?php

include "../connections.php";

$conn = connection();

$unameErr = $passwrdErr = "";

$uname = $password = "";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username
    if(empty(($_POST["usrname"]))) {
        $unameErr = "Username is required";
    }else 
    {
        $uname = $_POST["usrname"];
    }

    if(empty($_POST["passwrd"])){
        $passwrdErr = "Password is required";
    }else
    {
        $password = $_POST["passwrd"];
    }

    if($uname && $password){
        $checkUname = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname' ");
        $checkUnameRow = mysqli_num_rows($checkUname);

        if($checkUnameRow > 0) {
            while($row = mysqli_fetch_assoc($checkUname)) {
                $usr_id = $row["id"];
                $usr_password = $row["password"];
                $usr_role = $row["role"];
            }

            if(md5($password) == $usr_password){
                session_start();

                $_SESSION['role'] = $usr_role;
                $_SESSION['id'] = $usr_id;

                if($usr_role == "1") {
                    header("Location: ../admin/index.php");
                }else{
                    header("Location: homepage.php");
                }
            }
            else {
                echo "<script>alert('Your email or password doesn't match')</script>";
                echo '<script>window.location"../views/LogInpage.php"</script>';
             }
    }
    else
        {
            echo "<script>alert('Invalid Input!')</script>";
            echo '<script>window.location"../views/LogInpage.php"</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="icon" type="image/x-icon" href="../assets/Global_Assets/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../static/css/global.css">
    <link rel="stylesheet" href="../static/css/login.css">
    <!-- fonts -->
    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JS -->

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="../views/startpage.php"><img src="../assets/Global_Assets/A's Logo.png" width="80px"></a>
                </div>
                <nav>
                </nav>
            </div>
        </div>
    </div>
<div class="lgnContainer">
    <div class="lgnfrm">
        <div class="lgnsmall-container">
            <div class="title">Log In</div>
            <form method="POST">
                <div class="lgn-details">
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="usrname" placeholder="Enter your username" value="<?php echo $uname ?>">
                        <?php echo $unameErr?>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwrd" placeholder="Enter your password">
                        <?php echo $passwrdErr?>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Log In">
                </div>
                <p>Don't have an account?</p>
                <li class="rgstrnw"><a class="rgstr" href="../views/registerpage.php">Register Now</a></li>
             </form>
          </div>
      </div>
</div>
</body>
</html>