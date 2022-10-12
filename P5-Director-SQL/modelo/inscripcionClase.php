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
    public function notaMediaPorDpto(){
        include("conexion.php");
        $consulta = $conexion->query("SELECT case xp.dpto 
        WHEN '01'then 'Chuquisaca'
        WHEN '02'then 'La Paz'
        WHEN '03'then 'Cochabamba'
        WHEN '04'then 'Oruro'
        WHEN '05'then 'Potosí'
        WHEN '06'then 'Tarija'
        WHEN '07'then 'Santa Cruz'
        WHEN '08'then 'Beni'
        WHEN '09'then 'Pando'
        ELSE 'otro'
        END 'dpto',
        avg(notaFinal) 'promedio'
        FROM inscripcion xi, persona xp
        where xp.ci=xi.ci
        group by xp.dpto");
        return ($consulta);
    }
}
?>