<?php

include("conexion.php");
$con=conectar();

$idModel=$_POST['idModel'];
$Model=$_POST['Model'];



$sql="UPDATE Model SET  Model='$Model' WHERE idModel='$idModel'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Model.php");
    }
?>