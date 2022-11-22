<?php 
    include("conexion.php");
    $con=conectar();

$ID=$_GET['id'];

$sql="Select * from Make WHERE idmake='$ID'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Update</title>
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateMake.php" method="POST">
                    
                                <input type="hidden" name="idmake" value="<?php echo $row['idmake']  ?>">
                                <input type="text" class="form-control mb-3" name="Make" placeholder="Make" value="<?php echo $row['Make']  ?>">
                               
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Update Make">
                    </form>
                    
                </div>


    </body>
</html>