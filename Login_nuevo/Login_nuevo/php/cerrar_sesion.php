<?php
session_start();

session_destroy();
header("location:/Dashboard_dos/index.php");
?>