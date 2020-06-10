<?php
$host="localhost:3308";
   $dbusername="root";
   $dbpassword="";
   $database="view_user";
   $conn=new mysqli($host,$dbusername,$dbpassword,$database);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   ?>

