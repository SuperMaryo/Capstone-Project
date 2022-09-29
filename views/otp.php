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
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../sweetalert2/jquery-3.6.1.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
</head>
<body>
    <form method="POST">
        <h3>Enter The 6-digit code</h3>
        <input type="number" name="vcode" placeholder="enter 6-digit code here">
        <input type="submit" value="verify" name="verify">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["verify"])) {
            if($_SESSION["code"] == $_POST["vcode"]){
                echo "<script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Logged In!',
                    showConfirmButton: false,
                    timer: 1500
                    })
                    </script>";

                    header("Location: homepage.php");
            }
        }
    }
    ?>
</body>
</html>