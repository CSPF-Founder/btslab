<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');

if(isset($_SERVER['HTTP_REFERER']))
{
if(strpos($_SERVER['HTTP_REFERER'],"http://".$_SERVER['HTTP_HOST'])!==false)
{
echo "HTTP Referer Header of this page is : ".$_SERVER['HTTP_REFERER'];
}
else
{
header("Oops, you are requesting from different from Domain.");
}
}
else
{
echo "Oops, No Referer Header found ";
}
include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>

