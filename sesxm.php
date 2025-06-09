<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION['user']=$_POST['user'];
    $_SESSION['password']=$_POST['password'];
    header('location:dis1.php');
exit();
}
$user=isset( $_SESSION['user'])?( $_SESSION['user']):'cant red';
$password=isset( $_SESSION['password'])?( $_SESSION['password']):'cant red';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>abc</title>
</head>
<body>
    <form method="post">
    <input type="text" name="user" required><br><br>
    <input type="password" name="password" required>

    <button type="submit" name="submit">submit</button>
</form>
</body>
</html>