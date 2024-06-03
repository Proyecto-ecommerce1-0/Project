<?php
$conexion= new mysqli("localhost", "root", "", "basededatosnew");

if($conexion)
{
    echo 'conexion exitosa';
}
else{
    echo 'conexion no exitosa';
}
?>