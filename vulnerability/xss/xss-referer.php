<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');

if(isset($_SERVER['HTTP_REFERER']))
{
echo "HTTP Referer Header of this page is : ".$_SERVER['HTTP_REFERER'];
}
else
{
echo "Oops, No Referer Header found ";
}
include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>

