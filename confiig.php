<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lib_db";
$con=mysqli_connect("$servername","$username","$password","$dbname");
if(!$con){
    die("connection falied....".mysqli_connection_error);
}else{
    echo"connection sucessful";
}
?>