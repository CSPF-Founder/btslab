<?php
ob_start();
include($_SERVER['DOCUMENT_ROOT'].'/btslab/header.php');
 
class RunCode
{
   public $code;

   function __construct()
   {
       
   }

   function __wakeup()
   {
		if(isset($this->code))
		{
			eval($this->code);
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
}
else
{
echo "Array parameter is missing";
}
 ?>


<?php

include($_SERVER['DOCUMENT_ROOT'].'/btslab/footer.php');

?>