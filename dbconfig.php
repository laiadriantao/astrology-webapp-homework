<?php
 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpassword = "";
 $dbname = "dbastroweb";

 if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname)){
   die("failed to connect");
 }


 ?>
