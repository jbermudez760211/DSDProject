<?php
include("conexion.php");
$con=conectar();

$NoEngine=$_POST['NoEngine'];
$NoWheels=$_POST['NoWheels'];
$Price=$_POST['Price'];
$idTipo=$_POST['idTipo'];
$idMake=$_POST['idMake'];
$idModel=$_POST['idModel'];
$NoDoors=$_POST['NoDoors'];
$Chain=$_POST['Chain'];
$TrunkCap=$_POST['TrunkCap'];
$LoadCap=$_POST['LoadCap'];
$AtCruiser=$_POST['AtCruiser'];
$AtScooter=$_POST['AtScooter'];



$sql="INSERT INTO vehicles VALUES('$NoEngine','$NoWheels','$Price','$idTipo','$idMake','$idModel')";
$query= mysqli_query($con,$sql);

$carsql = "INSERT INTO Cars VALUES('$NoEngine','$NoDoors')";
$motosql = "INSERT INTO Motorcycle VALUES('$NoEngine','$Chain')";

$trunksql = "INSERT INTO Sedan VALUES('$NoEngine','$TrunkCap')";
$vansql = "INSERT INTO Van VALUES('$NoEngine','$LoadCap')";

$cruisersql = "INSERT INTO cruiser VALUES('$NoEngine','$AtCruiser')";
$scootersql = "INSERT INTO scooter VALUES('$NoEngine','$AtScooter')";


if ($NoDoors<>"") {
    $query2= mysqli_query($con,$carsql);

}
if ($Chain<>"") {
    $query2= mysqli_query($con,$motosql);

}

if ($TrunkCap<>"") {
    $query2= mysqli_query($con,$trunksql);

}

if ($LoadCap<>"") {
    $query2= mysqli_query($con,$vansql);

}

if ($AtCruiser<>"") {
    $query2= mysqli_query($con,$cruisersql);

}

if ($AtScooter<>"") {
    $query2= mysqli_query($con,$scootersql);

}
if($query){
    Header("Location: index.php");
    
}else {
}
?>