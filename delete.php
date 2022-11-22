<?php

include("conexion.php");
$con=conectar();

$NoEngine=$_GET['id'];

$sql="DELETE FROM Vehicles  WHERE NoEngine='$NoEngine'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Index.php");
    }
?>
