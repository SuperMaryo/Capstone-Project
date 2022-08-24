<?php

function connection(){
  $servername = "localhost";
  $username = "Marrr";
  $password = "tiomar";
  $dbname = "firstdb";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else {
    return $conn;
  }
}

?>