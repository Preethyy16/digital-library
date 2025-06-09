<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nature & Wildlife Gallery</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="my_db";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    if(!$con){
        die("conection falied: ");

    }else{
        echo"connection sucessful";
    }
    ?>
    </body>
    </html>