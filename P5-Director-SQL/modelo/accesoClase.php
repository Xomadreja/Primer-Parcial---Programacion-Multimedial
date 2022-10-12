<?php
class Acceso{
    private $id;
    private $ci;
    private $usuario;
    private $password;
    private $rol;
    public function __construct($i,$c,$u,$p,$r){
        $this->id=$i;
        $this->ci=$c;
        $this->usuario=$u;
        $this->password=$p;
        $this->rol=$r;
        
    }
    public function verificar(){
        include("conexion.php");
        $consulta = $conexion->query("SELECT * from acceso where usuario='$this->usuario' and password='$this->password' and rol= '$this->rol'");
        return ($consulta);
    }
}
?>