<?php  
     require "../connections.php";
     $conn = connection();

     $prodId = $_GET['id'];

     $prodDel = mysqli_query($conn, "DELETE FROM product_info WHERE prod_id = '$prodId'");

     header("Location: adminProd.php");


?>