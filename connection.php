<?php 
   $server = "localhost";
   $db_username = "root";
   $db_password = "";
   $db_name = "student";

   if(!$conn = mysqli_connect($server,$db_username,$db_password,$db_name)){
    die("connection failed");
   }
?>