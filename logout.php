<?php
session_start();
unset($_SESSION["kadi"]);
session_unset();
$_SESSION=array();
session_destroy();
header("location:login.php");
?>
