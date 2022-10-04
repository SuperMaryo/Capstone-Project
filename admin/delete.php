<?php  
     require "../connections.php";
     $conn = connection();

     $projId = $_GET['id'];

     $projDel = mysqli_query($conn, "DELETE FROM projects WHERE proj_id = '$projId'");

     header("Location: adminProj.php");


?>