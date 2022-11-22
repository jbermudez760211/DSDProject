<?php

include("conexion.php");
$con=conectar();

$idmake=$_POST['idmake'];
$Make=$_POST['Make'];



$sql="UPDATE make SET  Make='$Make' WHERE idmake='$idmake'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Make.php");
    }
?>