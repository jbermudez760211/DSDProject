<?php

include("conexion.php");
$con=conectar();

$idModel=$_GET['id'];

$sql="DELETE FROM Model  WHERE idModel='$idModel'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Model.php");
    }
?>
