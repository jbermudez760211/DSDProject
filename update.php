<?php

include("conexion.php");
$con=conectar();

$NoEngine=$_POST['NoEngine'];
$NoWheels=$_POST['NoWheels'];
$Price=$_POST['Price'];
$idTipo=$_POST['idTipo'];
$idMake=$_POST['idMake'];
$idModel=$_POST['idModel'];


$sql="UPDATE vehicles SET  NoWheels='$NoWheels',Price='$Price', idMake='$idMake',idModel='$idModel',idTipo='$idTipo' WHERE NoEngine='$NoEngine'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>