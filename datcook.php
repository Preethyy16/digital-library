<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST")
{
    setcookie("times",date("y/m/d h:i:r"),time()+(86400*30),"/");
    header("location: ".$_SERVER['PHP_SELF']);
}
?>
<html>
    <head>
        <body>
            <?php
            if(isset($_COOKIE['times'])){
                echo" visited ".$_COOKIE['times'];
                setcookie("times",date("y/m/d h:i:r"),time()+(86400*30),"/");
            }else{
                echo"first visit";
            }
            
            ?>
            <form method="POST">
        <input type="submit" value="Refresh Visit Time">
    </form>
</body>
    </html>