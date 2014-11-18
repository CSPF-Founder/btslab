<?php
if(!isset($_SESSION))
{
session_start();
}
if(!isset($_SESSION['isAdminLoggedIn']))
{
header("Location: adminlogin.php");
}
else
{
header("Location: admin.php");
}
?>
