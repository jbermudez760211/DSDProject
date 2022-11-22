<?php

include("conexion.php");
$con=conectar();

$idmake=$_GET['id'];

$sql="DELETE FROM Make  WHERE idmake='$idmake'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Make.php");
    }
?>
