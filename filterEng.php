<?php
include("conexion.php");
$con=conectar();


$NoEngine=$_POST['NoEngine'];




    $sql="SELECT `vehicles`.`NoEngine`, `vehicles`.`NoWheels`, `vehicles`.`Price`, `tipe`.`Tipe` as idTipo, `make`.`Make` as idMake, `model`.`Model` as idModel FROM vehicles LEFT JOIN `tipe` ON `vehicles`.`idTipo` = `tipe`.`idTipe` 
            LEFT JOIN `make` ON `vehicles`.`idMake` = `make`.`idmake` 
            LEFT JOIN `model` ON `vehicles`.`idModel` = `model`.`idModel` WHERE  vehicles.NoEngine = '$NoEngine'";
   
$query= mysqli_query($con,$sql);

if($query){
    /*Header("Location: index.php"); */
    
}else {
}
?>


<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title> Search by Engine Number Results</title>
</head>
<body>
    <h1> Search by Engine Number Results </h1>
 <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Engine Number</th>
                                        <th>Number of Wheels</th>
                                        <th>Price</th>
                                        <th>Id Type</th>
                                        <th>Id Make</th>
                                        <th>Id Model</th>
                                        <th></th>
                                        <th></th>
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
                                                <th><a href="actualizar.php?id=<?php echo $row['NoEngine'] ?>" class="btn btn-info">Edit</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NoEngine'] ?>" class="btn btn-danger">Delete</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
</body>
</html>