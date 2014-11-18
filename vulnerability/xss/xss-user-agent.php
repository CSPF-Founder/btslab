<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');

if(isset($_SERVER['HTTP_USER_AGENT']))
{
echo "You are using the following User Agent : ".$_SERVER['HTTP_USER_AGENT'];
}
else
{
echo "Oops, No User Agent Header found ";
}
include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>

