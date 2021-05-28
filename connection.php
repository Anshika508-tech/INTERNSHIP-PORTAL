<?php
  $servername = "localhost";
$username = "root";
$password = "";
$database="internship for you";

$link =mysqli_connect($servername,$username,$password,$database);

if (mysqli_connect_error()) {
          
         die("There was an error connecting to the database");
          
      }
else{
echo "hello you are safe";
}

?>