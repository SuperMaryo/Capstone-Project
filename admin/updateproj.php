<?php 
     require "../connections.php";
     $conn = connection();

     if(isset($_POST['update'])){
        $id = $_POST['update_id'];

        $title = $_POST['projTitle'];
        $client = $_POST['clientName'];
        $location = $_POST['locations'];
        $img = $_POST['fileToUpload'];
        $details = $_POST['details'];

        $query = "UPDATE product_info SET projTitle = '$title', clientName = '$client',  locations = '$location', fileToUpload = '$img', details = '$details'";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            header("Location: adminProj.php");
        }
        else {
            echo "<script>alert('error')</script>";
        }
     }
?>