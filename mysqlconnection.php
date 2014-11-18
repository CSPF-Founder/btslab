<?php
include($_SERVER['DOCUMENT_ROOT'].'/btslab/config.php');
$con=mysql_connect($db_server,$db_user,$db_password) or die("Connection Failure: ".mysql_error());
mysql_select_db($db_name,$con);	
?>