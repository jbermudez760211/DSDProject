<?php 
    include("conexion.php");
    $con=conectar();

$ID=$_GET['id'];

$sql="SELECT * FROM vehicles WHERE NoEngine='$ID'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

   $Tipo = "Select * from Tipe";
    $qTipo=mysqli_query($con,$Tipo);

    $Model= "Select * from Model";
    $qModel=mysqli_query($con,$Model);

    $Make = "Select * from Make";
    $qMake=mysqli_query($con,$Make);
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
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="NoEngine" value="<?php echo $row['NoEngine']  ?>">
                                <input type="text" class="form-control mb-3" name="NoWheels" placeholder="NoWheels" value="<?php echo $row['NoWheels']  ?>">
                                <input type="text" class="form-control mb-3" name="Price" placeholder="Price" value="<?php echo $row['Price']  ?>">
                                <Select name="idTipo" class="col-md-10" color=   #FFFFFF >
                                            <?php
                                                while($rows=mysqli_fetch_array($qTipo)){
                                            ?> 
                                            <option value=<?php echo $rows['idTipe'];?> color= '#FFFFFF' <?php if($rows['idTipe']==$row['idTipo']) echo 'selected' ; ?> > <?php echo $rows['Tipe'];?> </option>
                                            <?php }?>
                                </Select>
                                <Select name="idMake" class="col-md-10" color=   #FFFFFF >
                                            <?php
                                                while($rows=mysqli_fetch_array($qMake)){
                                            ?> 
                                            <option value=<?php echo $rows['idmake'];?> color= '#FFFFFF' <?php if($rows['idmake']==$row['idMake']) echo 'selected' ; ?> > <?php echo $rows['Make'];?> </option>
                                            <?php }?>
                                </Select>
                                <Select name="idModel" class="col-md-10" color=   #FFFFFF >
                                            <?php
                                                while($rows=mysqli_fetch_array($qModel)){
                                            ?> 
                                            <option value=<?php echo $rows['idModel'];?> color= '#FFFFFF' <?php if($rows['idModel']==$row['idModel']) echo 'selected' ; ?> > <?php echo $rows['Model'];?> </option>
                                            <?php }?>
                                </Select>
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Update">
                    </form>
                    
                </div>


    </body>
</html>