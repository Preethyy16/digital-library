<?php
session_start();
var_dump($_SESSION);
echo"welcome:".$_SESSION['user'];
echo"welcome:".$_SESSION['password'];
?>