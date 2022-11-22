<?php
	include("conexion.php");
    $con=conectar();
	
	//$id_estado = $_POST['id_estado'];
	
	$queryM = "SELECT * FROM tipe ;
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Vehicules Types</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_tipe']."'>".$rowM['Tipe']."</option>";
	}
	
	echo $html;
?>