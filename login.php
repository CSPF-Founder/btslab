<?php  
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');
$em="";
if(isset($_POST['Login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

		$result=mysql_query("select * from users where username='$username' and password='$password' ") or die(mysql_error());;
		if(mysql_num_rows($result))
		{
		$data=mysql_fetch_array($result);
		session_start();
		$_SESSION['isLoggedIn']=1;
		$_SESSION['userid']=$data["ID"];
		$_SESSION['username']=$data["username"];
		$_SESSION['avatar']=$data['avatar'];
		//$_SESSION['csrf']=rand(1000,100000);
		header("Location: index.php");
		}
		else
		{
		$em="Username/Password is wrong";
		}
	
}
include('header.php');
?>

<form action="login.php" method="post">
<table> 
<tr><td>UserName: </td><td><input type="text" name="username" /></td></tr>
<tr><td>Password :</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Login" value="Login"/></td></tr>
</table>  
</form>

<?php

echo "<span style='color:red'>".$em."</span>";
include('footer.php'); ?>
