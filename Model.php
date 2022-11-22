<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT *  FROM `Model`";
    $query=mysqli_query($con,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Model of  Vehicules</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <font size= 6 >Model </font> 

                                <form action="insertarModel.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="Model" class="col-md-8" placeholder="">
                                                                                                            
                                    <input type="submit" class="btn btn-primary" value="Add New Model">
                                </form>
                                <br></br>
                                 <a href="index.php" class="btn btn-info" > Back Home</a>
                        </div>
                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDModel</th>
                                        <th>Model</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idModel']?></th>
                                                <th><?php  echo $row['Model']?></th>
                                                
                                                <th><a href="actualizarModel.php?id=<?php echo $row['idModel'] ?>" class="btn btn-info">Edit</a></th>
                                                <th><a href="deleteModel.php?id=<?php echo $row['idModel'] ?>" class="btn btn-danger">Delete</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

   
    </body>
</html>