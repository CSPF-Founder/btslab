<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$result=mysql_query("select * from users where id=".$id);
	$data=@mysql_fetch_array($result);
	if($data)
	{
	echo "<br>About ".$data['username'].":<br>".$data['about'];
	}
	else
	{
	echo "<br/>Oops, No data found";
	}
}

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
