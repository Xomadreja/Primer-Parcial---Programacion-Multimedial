<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Editar persona</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Editar persona</h1>
        <form action="<?php echo base_url();?>editPersona/update/<?php echo $id;?>" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="fullName" class="form-control" value="<?php echo $nombreCompleto?>">
                     
                    </div>

                    <div class="form-group">
                        <label >CI</label>
                        <input type="text" name="ci" name="ci" class="form-control"value="<?php echo $ci?>">
              
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label >Fecha Nacimiento</label>
                        <input type="date" name="fechaNac"class="form-control" value="<?php echo $fechaNac?>">
                     
                    </div>

                    <div class="form-group">
                        <label for="">Departamento <?php echo $dpto;?></label>
                        <select name="dpto" >
                            <option value="" disabled selected>Seleccione un Dpto</option>
                            <option value="01">Chuquisaca - 01</option>
                            <option value="02">La Paz - 02</option>
                            <option value="03">Cochabamba - 03</option>
                            <option value="04">Oruro - 04</option>
                            <option value="05">Potosi - 05</option>
                            <option value="06">Tarija - 06</option>
                            <option value="07">Santa Cruz - 07</option>
                            <option value="08">Beni - 08</option>
                            <option value="09">Pando - 09</option>
                           
                            
                        </select>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>