<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $database = "booking_app";

   $conn = mysqli_connect($host, $username, $password, $database);

   if(!$conn){
    die("Database connection failed" . mysqli_error($conn));
   }
   else{
    //echo "Database connection success!!";
   }

?>