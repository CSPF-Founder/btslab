<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>

		Change the Background Color<br/><br/>

		<form action="xss2.php" method="get" style="background-color:<?php if(isset($_GET['clr'])) echo $_GET['clr']?>">
		<select name="clr">
		<option value="#000">Black</option>
		<option value="#FFF">White</option>
		</select>
		<input type="submit" value="Change" name="Change"/>
		</form>
		<br/>
		
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
<!-- Simple Reflected XSS 2 -->

<?php if(isset($_GET['keyword'])) echo "No results found for ".$_GET['keyword']?>
