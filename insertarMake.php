<?php
include("conexion.php");
$con=conectar();

$idmake=$_POST['idmake'];
$Make=$_POST['Make'];




$sql="INSERT INTO Make VALUES('','$Make')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Make.php");
    
}else {
}
?>