<?php 
    include("conexion.php");
    $con=conectar();

    $Tipo = "Select * from Tipe";
    $qTipo=mysqli_query($con,$Tipo);

    $Model= "Select * from Model";
    $qModel=mysqli_query($con,$Model);

    $Make = "Select * from Make";
    $qMake=mysqli_query($con,$Make);
    
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title> Search by Type,Make and Model</title>
</head>
<body>
	<h1> Search by Type,Make and Model</h1>
<table class="table">

       <form action="filter.php" method="POST">
            <label> 'Type ' </label>
             <Select name="IdTipo" class="col-md-20" color=   #FFFFFF>
             	<option value=0> .....Chose type </option>
                <?php
                    while($row=mysqli_fetch_array($qTipo)){
                ?> 
                    <option value=<?php echo $row['idTipe'];?> color= '#FFFFFF'>  <?php echo $row['Tipe'];?> </option>
                <?php }?>

             </Select>
             <br> </br>
            <label>'Make' </label>

              <Select name="IdMake" class="col-md-20"  >
              	<option value=0> .....Chose Make </option>
                <?php
                  while($row=mysqli_fetch_array($qMake)){
                ?> 
                  <option value=<?php echo $row['idmake'];?> >  <?php echo $row['Make'];?> </option>
                <?php }?>

                </Select>
                 <br> </br>
                <label> Model </label>
                 <Select name="IdModel" class="col-md-20">
                 	<option value=0> .....Chose Model </option>
                  <?php
                   while($row=mysqli_fetch_array($qModel)){
                  ?> 
                   <option value=<?php echo $row['idModel'];?>>  <?php echo $row['Model'];?> </option>
                 <?php }?>
                </Select>
               <br>  </br>

        <input type="submit" class="btn btn-primary" value="Filter.....">
       </form> 
      </table> 
</body>
</html>