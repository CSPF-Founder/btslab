<?php 
 error_reporting(0);
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');

 ?>
 <h2> This page is vulnerable to Blind SQL injection </h2>

<?php

if(isset($_REQUEST['id']))
{

$result=mysql_query("select page from tdata where id=".$_REQUEST['id']);
	$data=@mysql_fetch_array($result);
	if($data)
	{
	
	include($data['page']);
	}
}

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');
?>