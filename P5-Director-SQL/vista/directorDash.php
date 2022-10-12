<?php
session_start();
if (empty($_SESSION['id'])) {
    header("location: login.php");
}
else{
    $ci = $_SESSION['ci'];
    include("../modelo/personaClase.php");
    $per = new Persona ("",$ci,"","","");
    $res = mysqli_fetch_array($per->datosPersonaCI());
    

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Director - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- ESTILOS CARRITO -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../imagenes/EscudoFCPN.png" width="50" height="50" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Director</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-solid fa-list"></i>
                    <span>Inicio</span></a>
            </li>

        

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $res[2]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="https://robohash.org/sitdoloreslibero.png?size=300x300&set=set1">
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="../controlador/logout_c.php"  data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->
<h1>Bienvenido Director</h1>
<div class='row'>
    <div class="col-md-1"></div>
    <div class="col-md-9">
     <h2>Media de Notas pos Departamento</h2>
        <table class='table'>
            <thead class='table-info'>
                <tr>
                    <th scope='col'>Departamento</th>
                    <th scope='col'>Media de Notas</th>
            
                </tr>
            </thead>
            <img src="" alt="">
            <tbody>
                <?php
                include('../modelo/inscripcionClase.php');
                $ins = new Inscripcion("","","","","","","");
                $res=$ins->notaMediaPorDpto();
                while($reg=mysqli_fetch_array($res)){
                    echo "<tr>";
                    echo "<td>". $reg[0]."</td>";
                    echo "<td>". $reg[1]."</td>";
                    echo "</tr>";
                }
      
                
                ?>
            </tbody>
        </table>
        
    </div>
    <div class="col-md-2"></div>
    </div>


<?php
require_once "footerDash.php";
?>
