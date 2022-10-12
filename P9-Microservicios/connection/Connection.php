<?php
    class Connection extends Mysqli{
        function __construct(){
            parent::__construct('localhost','root','','MiBaseAylinBotelo');
            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexion exitosa' : die('Error al conectarse a la BD');
            
        }
    }
?>