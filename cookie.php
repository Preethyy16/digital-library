<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];

setcookie("username",$username,time()+(86400*30),"/");
setcookie("lastaccess",date("y/m/d h:i:s"),time()+(86400*30),"/");
header("location:".$_SERVER['PHP_SELF']);
exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>cookie</title>
    
</head>

<body>
    <?php
    if(isset($_COOKIE['username'])&&($_COOKIE['lastaccess'])){

       echo" welcome".$_COOKIE['username'];
       echo"last acess".$_COOKIE['lastaccess'];
       setcookie("lastaccess",date("y/m/d h:i:s"),time()+(86400*30),"/");

    }else{
        echo"some error";
    }
   
    ?>
<form method="POST">
    <h1> form</h1>
user name:<input type="text" name="username" value=""><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>
