<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>
		
		<form action="postxss.php" method="POST">
		Enter Your Name:<input type="text" name="name" value=""/>
		<br/><br/><input type="submit" name="enter" value="Enter"/>
		</form>
		<br/>
		

<?php 
if(isset($_POST['name']))
{
echo "Hello ".$_POST['name'].", Welcome to BTS Lab";
}

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>

