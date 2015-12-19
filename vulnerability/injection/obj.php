<?php
ob_start();
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
 
class DeleteFile
{
   public $cache_file;

   function __construct()
   {
       
   }

   function __destruct()
   {

      $file = $_SERVER['DOCUMENT_ROOT']."/btslab/tmp/{$this->cache_file}";
      if (file_exists($file)) 
	{
		if (!unlink($file))
		 {
	 	 echo ("<br/>Error deleting $file");
		 }
		else
  		{
  		echo ("<br/>Deleted $file");
  		}
	}
	else
	{

	echo  "<br/>file not exists ".$file;
	}
   }
}

if(isset($_REQUEST['array']))
{ 	
 $var1=unserialize($_REQUEST['array']);
if(is_array($var1))
{
echo "<br/>First Element: ".$var1[0];
}
 
unset($var1);
}
else
{
echo "Array parameter is missing";
}
 ?>


<?php

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');

?>