<?php
session_start();
if(!empty($_POST["btnLogin"])){
    $user=$_POST["user"];
    $password=$_POST["password"];
    $password=MD5($password);
    //echo $user.$password;
    include("../modelo/accesoClase.php");
    $acc = new Acceso ("","",$user,$password,'estudiante');
    $sqlEstudiante=$acc->verificar();
    $acc = new Acceso ("","",$user,$password,'docente');
    $sqlDocente=$acc->verificar();
    $acc = new Acceso ("","",$user,$password,'director');
    $sqlDirector=$acc->verificar();
    if ($datos=$sqlEstudiante->fetch_object()) {
        $_SESSION['id']=$datos->id;
        $_SESSION['ci']=$datos->ci;
        $_SESSION['rol']=$datos->rol;
        header("location: estudianteDash.php");
    }
    else if ($datos=$sqlDocente->fetch_object()) {
        $_SESSION['id']=$datos->id;
        $_SESSION['ci']=$datos->ci;
        $_SESSION['rol']=$datos->rol;
        header("location: docenteDash.php");
    } 
    else if ($datos=$sqlDirector->fetch_object()) {
        $_SESSION['id']=$datos->id;
        $_SESSION['ci']=$datos->ci;
        $_SESSION['rol']=$datos->rol;
        header("location: directorDash.php");
    }
}
?>