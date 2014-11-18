<?php
if(!isset($_SESSION))
{
session_start();
}
 if(!isset($_SESSION['isLoggedIn'])) { 
header("Location: /btslab/login.php");
}
?>
