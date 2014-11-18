<?php 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/lib/loginverify.php');
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/btslab/config.php');

if(isset($_GET['id']))
{
	if (class_exists('PDO')) //Using PDO to prevent SQL Injection
	{
	$db = new PDO("mysql:host=localhost;dbname=$db_name;",$db_user,$db_password);

		$id=intval($_GET['id']); //Validating Input to Prevent SQLi 
		//Prepared Statement to Prevent SQLi : 
		$statement = $db->prepare("select * from users where id = :id");
		$statement->execute(array(':id' => $id));
		$row = $statement->fetch();  
		//Display Details
		echo "UserName : ".$row['username']."<br>";
		echo "Email : ".$row['email']."<br>";
		echo "About : ".$row['about'];
	 
	}
	else //If there is no PDO installed 
	// This code is  vulnerable to SQL Injection
	{
		$id=$_GET['id'];
		include('mysqlconnection.php');
		$result=mysql_query("select * from users where id='$id'");
		if(mysql_num_rows($result)>0)
		{
		$row=mysql_fetch_array($result);
		echo "UserName : ".$row['username']."<br>";
		echo "Email : ".$row['email']."<br>";
		echo "About : ".$row['about']."<br>";
		}
	}
}

echo "<br/><br><img src='/btslab/vulnerability/avatar/".$_SESSION['avatar']."' alt='[No Profile Avatar]'/> - <a href='/btslab/vulnerability/Change-Profile-Picture.php'>Change Avatar</a><br/>";
?>
</br></br>
<a href="/btslab/vulnerability/csrf/changeinfo.php"> Change Description about you</a></br></br>
<a href="/btslab/vulnerability/csrf/change-email.php">Change Email ID</a>

<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');  ?>
