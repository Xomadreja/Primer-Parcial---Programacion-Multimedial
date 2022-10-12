<!DOCTYPE php>
<php lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/logo2.png">
  </head>
  <body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
      <div class="Mycontainer">
        <div class="logo">
          <a href="#" title="Logo">
            <img src="../imagenes/EscudoFCPN.png" alt="Logo" class="img-responsive">
          </a>
        </div>
    
        
    
        <div class="clearfix"></div>
      </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <div class="login-cover">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-sd-3 offset-lg-4"
          >
            <h1 class="mb-3 text-center">Login</h1>
            <?php
            include('../controlador/login_c.php');
            ?>
            <form class="mb-3" method="POST" action="">
              <div class="form-group">
                <label for="user">Usuario:</label>
                <input type="user" class="form-control" placeholder="" id="user" required name="user"/>
              </div>
              <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" required name="password"/>
              </div>
              <input name="btnLogin" class="btn btn-primary btn-block" type="submit" value="Login">
            </form>
<br><br><br><br>
          </div>
        </div>
      </div>
    </div>

   

  
    
    <!-- footer Section Starts Here -->
    <section class="footer">
      <div class="Mycontainer text-center">
        <p>Todos los derechos reservados por <a href="#">FCPN</a></p>
      </div>
    </section>
    <!-- footer Section Ends Here -->
  </body>
</php>
