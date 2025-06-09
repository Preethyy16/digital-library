<?php 
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
    $_SESSION['op1']=$_POST['op1'];
    header('location:dis.php');
exit();
}

//retrive 
$country=isset($_SESSION['op1'])?$_SESSION['op1']:'not read';

?>
<!DOCTYPE html>
<head>
    <title>session</title>
</head>
<body>
    <form method="post">
    country name:
    <label><input type="radio" name="op1"value="abc">abc</label><br><br>
    <label><input type="radio" name="op1" value="India">Ibc</label><br><br>
    <input type="submit" value="submit">
    
    
    
</form>

</body>
</html>