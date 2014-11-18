<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php'); 
function filter_in($in)
{
	
	return $in;
}
?>
		Please enter only words and search:<br/><br/>
		<form action="xss4.php" method="get">
		<input type="text" name="keyword" value=<?php if($_GET['keyword']) echo htmlspecialchars($_GET['keyword']); else echo 'Search';?> >
		<br/><br/><input type="submit" name="Search" value="Search"/>
		</form>
		<br/>
		<?php if(isset($_GET['keyword'])) echo "No results found for ".htmlspecialchars($_GET['keyword'])?>
<br/>
<br/>
<br/>
<br/>

<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
<!-- Reflected XSS 4-->
