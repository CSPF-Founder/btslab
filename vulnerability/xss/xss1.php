<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); ?>
		Please enter only words and search:<br/><br/>
		<form action="xss1.php" method="get">
		<input type="text" name="keyword" value="Search"/>
		<br/><br/><input type="submit" name="Search" value="<?php if(isset($_GET['Search'])) echo $_GET['Search']; else echo 'Search'; ?>"/>
		</form>
		<br/>
		<?php if(isset($_GET['keyword'])) echo "No results found for ".$_GET['keyword']?>
<br/>
<br/>
<br/>
<br/>

<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
<!-- Simple Reflected XSS 1 -->
