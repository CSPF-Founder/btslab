<?php include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');

if(isset($_GET['data']))
{
  $output = "";
$data = $_GET['data'];
 eval('$output = ' . $data. ';');
 echo $output;
}

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php'); ?>
