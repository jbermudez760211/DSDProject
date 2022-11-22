<?php
include("conexion.php");
$con=conectar();

$idModel=$_POST['idModel'];
$Model=$_POST['Model'];




$sql="INSERT INTO Model VALUES('$idModel','$Model')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: Model.php");
    
}else {
}
?>