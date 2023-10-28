<?php
session_start();
$_SESSION['veri']=rand(1000,9999);
echo $_SESSION['veri'];
?>