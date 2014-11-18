<?php
session_start();
session_destroy();
header("Location: /btslab/index.php");
?>
