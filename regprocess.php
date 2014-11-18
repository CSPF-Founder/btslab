<?php
include($_SERVER['DOCUMENT_ROOT'].'/btslab/mysqlconnection.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$About=$_POST['About'];
$em="";
$e=0;
if($username=='' || $password == '' || $email=='')
{
$em="Please Fill all fields";
$e=1;
}
if(strlen($username) < 3)
{
$em=$em."<br/>"."Your Name must be more than 4 characters";
$e=1;
header('Location: register.php?em='.$em);
}
$result=mysql_query("select * from users where username='$username'") or die(mysql_error());
if(mysql_num_rows($result)>0)
{
$e=1;
$em=$em."<br/>"."Username is already taken";
}
if($e==1)
{
header('Location: register.php?em='.$em);
}
else
{
$query="INSERT into users(username, password, email, About,avatar,privilege) values ('$username','$password','$email','$About','default.jpg','user')";
mysql_query($query) or die(mysql_error());
mysql_close();
header('Location: login.php');
}

?>
