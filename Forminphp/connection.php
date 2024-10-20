<?php
// error_reporting(0);
 $servername="localhost";
 $username="root";
 $password="";
 $dbname ="responsiveform";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
//  $conn = mysqli_connect("localhost","root","","responsiveform");


 if($conn)
 {
    // echo"Connection ok";
 }
 else
 {
    echo"Connection failed".mysqli_connect_error();
 }



?>