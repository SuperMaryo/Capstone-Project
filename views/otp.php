<?php

    session_start();
    if(!$_SESSION["code"]){
        $code = rand(100000, 999999);
        $_SESSION["code"] = $code;
        $url = "https://script.google.com/macros/s/AKfycbw-CgMQSmZMuhMMJiRQq_2jWLaVtr-sdSCcLXbOcrmZ0GqvmpVLGCmzT9JZ75cZRnnd7A/exec";
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_POSTFIELDS => http_build_query([
                "recipient" => $_SESSION['email'],
                "subject"   => "Verification Code",
                "body"      => $code
            ])
        ]);
        $result = curl_exec($ch);
        // echo $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otp</title>
    <link rel="stylesheet" href="../static/css/otp.css">
    <!-- fonts -->
    <link rel="stylesheet" href="../static/css/adminpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../sweetalert2/jquery-3.6.1.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-50">
                <img src="../assets/Admin_img/verify.png" alt="" style="width: 500px;">
            </div>
            <div class="col-50">
            <form method="POST">
            <h1>Email Verfication</h1>
                <p>Enter The 6-digit code sent to</p> <h3><?php echo $_SESSION["email"] ?></h3>
                <input type="number" name="vcode" placeholder="enter 6-digit code here" maxlength="6">
                <input type="submit" value="verify" name="verify">
            </form>
             </div>
        </div>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["verify"])) {
            if($_SESSION["code"] == $_POST["vcode"]){
                echo "  <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Request Submitted!',
                    showConfirmButton: false,
                    timer: 1500
                    }).then(function () {

                    document.location.href = 'bookingform.php';
                    
                    });
                 </script>";
            }
            else {
                echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Your pin is incorrect!',
                    confirmButtonColor: '#2fccf8'
                  })</script>";
             }
        }
    }
    ?>
</body>
</html>