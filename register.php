<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>
<form action="regprocess.php" method="post">
<table> 
<tr><td>UserName: </td><td><input type="text" name="username" /></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
<tr><td>Describer Yourself:</td><td><input type="text" name="About" /></td></tr>
<tr><td>Password :</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Register" value="Register"/></td></tr>
</table>  
</form>
<?php
if(isset($_GET['em']))
{
echo "<span style='color:red'>".$_GET['em']."</span>";
}
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
