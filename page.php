<?php
session_start();
if(isset($_SESSION['pageview']))
{
    $_SESSION['pageview']++;

}else{
    $_SESSION['pageview']=1;
}
?>
<html>
    <head>
        <body>
            <p>page view is: <?php echo $_SESSION['pageview']; ?></p>
</body>
</head>
    </html>
