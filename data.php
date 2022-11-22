<?php 
    include("conexion.php");
    $con=conectar();

    $sqlSedan = "SELECT `vehicles`.`NoEngine`, `vehicles`.`NoWheels`, `vehicles`.`Price`, `tipe`.`Tipe` as idTipo, `make`.`Make` as idMake, `model`.`Model` as idModel, `cars`.`NoDoors` as NoDoors, `sedan`.`TrunkCap` as TrunkCap , `van`.`LoadCap` as LoadCap , `motorcycle`.`chain` as Chain , `cruiser`.`AtCruiser` as AtCruiser , `scooter`.`AtScooter` as AtScooter
            FROM `vehicles` 
            LEFT JOIN `tipe` ON `vehicles`.`idTipo` = `tipe`.`idTipe` 
            LEFT JOIN `make` ON `vehicles`.`idMake` = `make`.`idmake` 
            LEFT JOIN `model` ON `vehicles`.`idModel` = `model`.`idModel`
            LEFT JOIN `cars` ON `vehicles`.`NoEngine` = `cars`.`NoEngine`
            LEFT JOIN `sedan` ON `vehicles`.`NoEngine` = `sedan`.`NoEngine`
            LEFT JOIN `van` ON `vehicles`.`NoEngine` = `van`.`NoEngine`
            LEFT JOIN `motorcycle` ON `vehicles`.`NoEngine` = `motorcycle`.`NoEngine`
            LEFT JOIN `cruiser` ON `vehicles`.`NoEngine` = `cruiser`.`NoEngine`
            LEFT JOIN `scooter` ON `vehicles`.`NoEngine` = `scooter`.`NoEngine`";

    $query=mysqli_query($con,$sqlSedan);

    
?>


<html>

<head>
        <title> General Information</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
        </script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    	<h1> General Information</h1>
		<div class="col-md-8">
	                            <table class="table" >
	                                <thead class="table-success table-striped" >
	                                    <tr>
	                                        <th>Engine Number</th>
	                                        <th>Number of Wheels</th>
	                                        <th>  Price   </th>
	                                        <th>  Type    </th>
	                                        <th>  Make    </th>
	                                        <th>  Model   </th>
	                                        <th>  NoDoors </th>
	                                        <th>  Sedan Trunk Cap </th>
	                                        <th>  Van Load Cap</th>
	                                        <th>  Chain   </th>
	                                        <th>  At Cruiser</th>
	                                        <th>  At Scooter</th>
	                                    </tr>
	                                </thead>

	                                <tbody>
	                                        <?php
	                                            while($row=mysqli_fetch_array($query)){
	                                        ?>
	                                            <tr>
	                                                <th><?php  echo $row['NoEngine']?></th>
	                                                <th><?php  echo $row['NoWheels']?></th>
	                                                <th><?php  echo $row['Price']?></th>
	                                                <th><?php  echo $row['idTipo']?></th>    
	                                                <th><?php  echo $row['idMake']?></th>  
	                                                <th><?php  echo $row['idModel']?></th>  
	                                                <th><?php  echo $row['NoDoors']?></th>  
	                                                <th><?php  echo $row['TrunkCap']?></th>  
	                                                <th><?php  echo $row['LoadCap']?></th>
	                                                <th><?php  echo $row['Chain']?></th>
	                                                <th><?php  echo $row['AtCruiser']?></th>
	                                                <th><?php  echo $row['AtScooter']?></th>
	                                                
	                                                <th><a href="deletedata.php?id=<?php echo $row['NoEngine'] ?>" class="btn btn-danger">Delete</a></th>                                        
	                                            </tr>

	                                        <?php 
	                                            }
	                                        ?>

	                                </tbody>

	                            </table>
	                        </div>
	                    </div>  
	                    <div>
	                    	<tr> <a href="index.php" class="btn btn-info" > Back Home</a> </tr>
	                    </div>	
	    </body>                

</html>
