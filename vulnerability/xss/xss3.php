<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>
		XSS <a href="xss3.php?t=title" title="xss3.php?t=<?php if($_GET['t']) echo $_GET['t']; else echo 'title';?>"> Challenge 3</a><br/>
		Please enter only words and search:<br/><br/>
		<form action="xss3.php" method="get">
		<input type="text" name="keyword" value="Search"/>
		<br/><br/><input type="submit" name="Search" value="Search"/>
		</form>
		<br/>
		<?php if(isset($_GET['keyword'])) echo "No results found for ".htmlspecialchars($_GET['keyword'])?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
	<!-- Simple Reflected XSS 3 -->
