<?php 
    include("conexion.php");
    $con=conectar();

    $sql = "SELECT `vehicles`.`NoEngine`, `vehicles`.`NoWheels`, `vehicles`.`Price`, `tipe`.`Tipe` as idTipo, `make`.`Make` as idMake, `model`.`Model` as idModel
            FROM `vehicles` 
            LEFT JOIN `tipe` ON `vehicles`.`idTipo` = `tipe`.`idTipe` 
            LEFT JOIN `make` ON `vehicles`.`idMake` = `make`.`idmake` 
            LEFT JOIN `model` ON `vehicles`.`idModel` = `model`.`idModel`";
    $query=mysqli_query($con,$sql);

    $Tipo = "Select * from Tipe";
    $qTipo=mysqli_query($con,$Tipo);

    $Model= "Select * from Model";
    $qModel=mysqli_query($con,$Model);

    $Make = "Select * from Make";
    $qMake=mysqli_query($con,$Make);

    $Cars = "Select * from Cars";
    $qCars=mysqli_query($con,$Cars);

    $Motorcycle = "Select * from Motorcycle";
    $qMotorcycle=mysqli_query($con,$Motorcycle);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Vehicules Information Control</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
        </script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
           
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-4">
                            <font size= 6 >Vehicules Information to Add </font> 

                                <form action="insertar.php" method="POST">
                                    <label> Engine Number </label>
                                    <input type="text" c class="form-control mb-3" name="NoEngine" class="col-md-8"  placeholder="">
                                    <label>Number of Wheels </label>
                                    <input type="text" class="form-control mb-3" name="NoWheels" class="col-md-8" placeholder="">
                                     <label>Price </label>
                                    <input type="text" class="form-control mb-3" name="Price" class="col-md-8" placeholder="" id="price">
                                    <label> 'Type ' </label>

                                        <Select onchange="ocultar();" name="idTipo" class="col-md-10" color=   #FFFFFF id="idtipo" >
                                            <option value=0> .....Chose type </option>
                                            <?php
                                                while($row=mysqli_fetch_array($qTipo)){
                                            ?> 
                                             <option value=<?php echo $row['idTipe'];?> color= '#FFFFFF'>  <?php echo $row['Tipe'];?> </option>
                                            <?php }?>
                                        </Select>
                                        <br> </br>
                                        <label>'Make' </label>

                                        <Select name="idMake" class="col-md-10"  >
                                            <option value=0> .....Chose Make </option>
                                            <?php
                                                while($row=mysqli_fetch_array($qMake)){
                                            ?> 
                                             <option value=<?php echo $row['idmake'];?> >  <?php echo $row['Make'];?> </option>
                                            <?php }?>
                                        </Select>
                                        <br> </br>
                                        <label> Model </label>
                                        <Select name="idModel" class="col-md-10">
                                            <option value=0> .....Chose Model </option>
                                            <?php
                                                while($row=mysqli_fetch_array($qModel)){
                                            ?> 
                                             <option value=<?php echo $row['idModel'];?>>  <?php echo $row['Model'];?> </option>
                                            <?php }?>
                                        </Select>
                                    <br>  </br>
                                    <!    /****Other Tables***//>

                                        <div class="container mt-5" id="divid" style="display: none;" >
                                          <div class="row" >
                                           <table class="table" >
                                            **Car****
                                            No Doors
                                            <input type="text" c class="form-control mb-3" name="NoDoors" class="col-md-8"  placeholder="">
                                                <select onchange= "ocultar1();" name="SedanVan" id="SedanVan" class="col-md-10">
                                                    <option value="0">....Select An Option </option>
                                                    <option value="1"> Sedan </option>
                                                    <option value="2"> Van </option>
                                                </select>    
                                             </table>
                                          </div>
                                        </div>    
                                        <! **** Valores para Sedan o Van>

                                        <div class="container mt-5" id="dSedan" style="display: none;" >
                                          <div class="row" >
                                           <table class="table" >
                                            **Car****
                                           Capacity Trunk Sedan
                                             <input type="text" c class="form-control mb-3" name="TrunkCap" class="col-md-8"  placeholder="">
                                               
                                             </table>
                                          </div>
                                        </div> 

                                        <div class="container mt-5" id="dVan" style="display: none;" >
                                          <div class="row" >
                                           <table class="table" >
                                            **Car****
                                             Capacity Load Van
                                             <input type="text" c class="form-control mb-3" name="LoadCap" class="col-md-8"  placeholder="">
                                          </table>
                                          </div>
                                        </div> 
                                        <! **** Hasta Aqui Valores para Sedan o Van>

                                     <div class="container mt-5" id="divid1" style="display: none;" >
                                        <div class="row" >
                                         <table class="table" >
                                        **MotorCycle****
                                        Chain Type
                                        <input type="text" c class="form-control mb-3" name="Chain" class="col-md-8"  placeholder="">
                                          <select onchange= "ocultar2();"name="CrusierScooter" id="CrusierScooter"class="col-md-10">
                                                <option value="0"> ...Select An Option</option>
                                                <option value="1"> Crusier </option>
                                                <option value="2"> Scooter </option>
                                            </select>    
                                      </table>
                                     </div>
                                     </div>   
                                     <! **** Valores para Crusier o Scooter>

                                        <div class="container mt-5" id="dCrusier" style="display: none;" >
                                          <div class="row" >
                                           <table class="table" >
                                            **Motorcycle****
                                            Atributo Crusier
                                             <input type="text" c class="form-control mb-3" name="AtCruiser" class="col-md-8"  placeholder="">
                                               
                                             </table>
                                          </div>
                                        </div> 

                                        <div class="container mt-5" id="dScooter" style="display: none;" >
                                          <div class="row" >
                                           <table class="table" >
                                           **Motorcycle****
                                            Atributo Scooter
                                             <input type="text" c class="form-control mb-3" name="AtScooter" class="col-md-8"  placeholder="">
                                          </table>
                                          </div>
                                        </div> 
                                        <! **** Hasta Aqui Valores para Sedan o Van>                                                         
                                    <input type="submit" class="btn btn-primary" value="Add New Vehicules">
                                   
                                </form>
                        </div>
                        

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Engine Number</th>
                                        <th>Number of Wheels</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Make</th>
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
                    </div>  
            </div>


       
      <table align="center">
        <th> </th> 
        <th> </th>     
        <td> <a href="Search.php" class="btn btn-info"  > Filter by Type, Model and/or Make...</a> </td>
        <td> <a href="SearchEng.php" class="btn btn-info" > Search By Engine Number ...</a> </td>
        <td> <a href="Data.php" class="btn btn-info" >       General Information</a> </td>
        <td> <a href="Make.php" class="btn btn-info" >       Makes to use ...</a> </td>
        <td> <a href="Model.php" class="btn btn-info" >      Model to Use ...</a> </td>
       </table> 
      </table>
    </div>
     </div>

     <script>
        function ocultar2(){
           if (document.getElementById('CrusierScooter').value == "2"){
            document.getElementById('dCrusier').style.display = 'none';
            document.getElementById('dScooter').style.display = 'block';
        }
            else {document.getElementById('dCrusier').style.display = 'block';
                  document.getElementById('dScooter').style.display = 'none';}
        }
        function ocultar1(){
           if (document.getElementById('SedanVan').value == "2"){
            document.getElementById('dSedan').style.display = 'none';
            document.getElementById('dVan').style.display = 'block';
        }
            else {document.getElementById('dSedan').style.display = 'block';
                  document.getElementById('dVan').style.display = 'none';}
        }



        function ocultar(){
            if (document.getElementById('idtipo').value == "2"){
            document.getElementById('divid').style.display = 'none';
              
        }
            else {document.getElementById('divid').style.display = 'block';}

            if (document.getElementById('idtipo').value == "1"){
            document.getElementById('divid1').style.display = 'none';
            
        }
            else {document.getElementById('divid1').style.display = 'block';}
        }
    </script> 
    </body>
</html>