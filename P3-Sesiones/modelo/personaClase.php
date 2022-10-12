<?php
class Persona{
    private $id;
    private $ci;
    private $nom;
    private $fechaN;
    private $dpto;
    public function __construct($i,$c,$nom,$f,$d){
        $this->id=$i;
        $this->ci=$c;
        $this->nom=$nom;
        $this->fechaN=$f;
        $this->dpto=$d;
        
    }
    public function datosPersonaCI(){
        include("conexion.php");
        $consulta = $conexion->query("SELECT * from persona where ci='$this->ci'");
        return ($consulta);
    }
}
?>