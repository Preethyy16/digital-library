<?php 
session_start();
$country=isset($_SESSION['op1'])?$_SESSION['op1']:'not read';

?>
<html>
    <head>
        <body>
            welcome!!<?php echo "country is: ".$country?>
            <a href="seession.php">home</a>
</body>
    </html>