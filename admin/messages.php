<?php 
if(!isset($_SESSION))
{
session_start();
}
 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');

if(isset($_REQUEST['msgid']))
{
	$msgid=$_REQUEST['msgid'];

	$result=mysql_query("select * from Messages where msgid=".$msgid) or die(mysql_error());
	$row=mysql_num_rows($result);
	if($row>=1)
	{
	echo "</br></br>Message: </br>";
	 
		while($row=mysql_fetch_array($result))
		{
			echo "Sender: ".$row['name']."<br/>";
			echo "Email: ".$row['email']."<br/>";
			echo "Message: ".$row['msg']."<br/>";
			
		}
	 
	}
	 
}

?>
 </br>
<a href="MessageList.php"> Back to Messages List</a>
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');  ?>
