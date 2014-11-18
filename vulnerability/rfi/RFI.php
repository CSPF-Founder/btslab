<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
echo" <br/>Note: This vulnerability works only when 'allow_url_include' is turned on in php.ini file <br/><br/>";
if(isset($_GET['file']))
{
include($_GET['file']);
}
else
{
echo "No files included<br/>";
}
include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
