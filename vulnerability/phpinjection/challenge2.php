<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');

if(isset($_GET['data']))
{
$data = $_GET['data'];
$data = preg_replace('/(.*)/e', 'strtoupper("\\1")',$data);
print $data;
}

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
