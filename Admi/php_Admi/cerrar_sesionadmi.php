<?php
session_start();

session_destroy();
header("location:/Project_nuevo/Admi/Login_admi.php");
?>