<?php 
if(!isset($_SESSION))
{
session_start();
}
 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');
if(isset($_REQUEST['action']) && $_REQUEST['action']='delete')
{
mysql_query("Delete from Messages;");
}
$result=mysql_query("select * from Messages;") or die(mysql_error());
$row=mysql_num_rows($result);
if($row>=1)
{
echo "<div style='text-align: right; '> <a href='?action=delete' >Delete All Messages</a></div> ";
echo "</br></br>Messages: </br>";
echo "<ol>";
	while($row=mysql_fetch_array($result))
	{
		$title=substr($row['msg'],0,14);
		$msgid=$row['msgid'];
		echo "<li>";
		echo "<a href='messages.php?msgid=$msgid'>$title ..</a>";
		echo "</li>";
	}
echo "</ol>";
}
else
{
echo "No Messages Found";
}

?>
 </br>
<a href="admin.php"> Back to Admin Panel</a>
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');  ?>
