<?php
include('confiig.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
    $accno=$_POST['accno'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $edition=$_POST['edition'];
    $sql="INSERT INTO books(accno,title,author,edition)VALUES(' $accno',' $title','$author','$edition')";
   if(mysqli_query($con,$sql))
   {
    echo"BOOK added sucessfully";
   }else{
    echo"error";
   }
   header("location:display.php");
   exit();

}
mysqli_close($con);
?>
<html>
    <head>
        <title>add</title>
</head>
<body>
    <form method="POST">
    Accession Number: <input type="text" name="accno"><br>
    Title: <input type="text" name="title"><br>
    Authors: <input type="text" name="author"><br>
    Edition: <input type="text" name="edition"><br>
    
    <input type="submit" name="submit" value="Add Book">
</form>
</body>
</html>