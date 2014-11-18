<?php
if(isset($_GET['file']))
{
header('Content-disposition: attachment; filename='.$_GET['file']);
header('Content-type: application/pdf');

readfile($_GET['file']);
}
else
{
echo "File Parameter is missing";
}
?>