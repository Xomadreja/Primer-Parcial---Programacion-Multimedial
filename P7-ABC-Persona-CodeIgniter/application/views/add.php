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
    
    <title>Nueva persona</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Nueva persona</h1>
        <form action="<?php echo base_url();?>newPersona-save" class="mt-4" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" name="fullName" class="form-control" placeholder="Nombre completo">
                     
                    </div>

                    <div class="form-group">
                        <label >CI</label>
                        <input type="text" name="ci" name="ci" class="form-control"placeholder="1234567">
              
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label >Fecha Nacimiento</label>
                        <input type="date" name="fechaNac"class="form-control">
                     
                    </div>

                    <div class="form-group">
                        <label for="">Departamento</label>
                        <select name="dpto">
                            <option value="01">Chuquisaca</option>
                            <option value="02">La Paz</option>
                            <option value="03">Cochabamba</option>
                            <option value="04">Oruro</option>
                            <option value="05">Potosi</option>
                            <option value="06">Tarija</option>
                            <option value="07">Santa Cruz</option>
                            <option value="08">Beni</option>
                            <option value="09">Pando</option>
                           
                            
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