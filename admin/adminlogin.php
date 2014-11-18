<?php  
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');
$em="";
if(isset($_POST['Login']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];

 if($username=='' || $password == '')
 {
	$em="Please Fill all fields";
 }
 else
 {
	$password=sha1($password);
	$result=mysql_query("select * from users where username='$username' and password='$password' and privilege='admin' ") or die(mysql_error());;
	if(mysql_num_rows($result)==1)
	{
	$data=mysql_fetch_array($result);
	session_start();
	$_SESSION['isAdminLoggedIn']=1;
	$_SESSION['userid']=$data["ID"];
	$_SESSION['username']=$username;
	$_SESSION['privilege']=$data['privilege'];
	header("Location: admin.php");
	}
	else
	{
	$em="Username/Password is wrong";
	}
  }
}
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
?>

<b>Admin Login Panel:</b><br/>
<form action="adminlogin.php" method="post">
<table> 
<tr><td>UserName: </td><td><input type="text" name="username" /></td></tr>
<tr><td>Password :</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Login" value="Login"/></td></tr>
</table>  
</form>

<?php

echo "<span style='color:red'>".$em."</span>";
include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
