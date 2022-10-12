<?php
class Inscripcion{
    private $id;
    private $ci;
    private $sigla;
    private $nota1;
    private $nota2;
    private $nota3;
    private $notaFinal;
    public function __construct($i,$c,$s,$n1,$n2,$n3,$nf){
        $this->id=$i;
        $this->ci=$c;
        $this->sigla=$s;
        $this->nota1=$n1;
        $this->nota2=$n2;
        $this->nota3=$n3;
        $this->notaFinal=$nf;
        
    }
    public function todasLasInscripciones(){
        include("conexion.php");
        $consulta = $conexion->query("SELECT * from inscripcion xi,persona xp where xi.ci=xp.ci");
        return ($consulta);
    }
}
?>