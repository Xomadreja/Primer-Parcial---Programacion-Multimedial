<?php
require_once "connection/Connection.php";
class Persona{
    public static function getAll(){
        $db = new Connection();
        $query = "SELECT * from persona";
        $resultado=$db->query($query);
        $datos=[];
        if($resultado->num_rows){
            while($row = $resultado->fetch_assoc()){
                $datos[] =[
                    'id' => $row['id'],
                    'ci' => $row['ci'],
                    'nombre' => $row['nombreCompleto'],
                    'fechaNac' => $row['fechaNac'],
                    'dpto' => $row['dpto']
                ];

            }
            return $datos;

        }
        else{
            return $datos;
        }
    }

    public static function getWhere($id_persona){
        $db = new Connection();
        $query = "SELECT * from persona WHERE id = $id_persona";
        $resultado=$db->query($query);
        $datos=[];
        if($resultado->num_rows){
            while($row = $resultado->fetch_assoc()){
                $datos[] =[
                    'id' => $row['id'],
                    'ci' => $row['ci'],
                    'nombre' => $row['nombreCompleto'],
                    'fechaNac' => $row['fechaNac'],
                    'dpto' => $row['dpto']
                ];

            }
            return $datos;

        }
        else{
            return $datos;
        }
    }

    public static function insert($ci,$nom,$fechaNac,$dpto){
        $db = new Connection();
        $query = "INSERT into persona (ci,nombreCompleto,fechaNac,dpto) values ('$ci','$nom','$fechaNac','$dpto')";
        $resultado=$db->query($query);
        if($db->affected_rows){
            return true;
        }
        return false;
    }
    public static function update($id_persona,$ci,$nom,$fechaNac,$dpto){
        $db = new Connection();
        $query = "UPDATE persona set ci='$ci',nombreCompleto='$nom',fechaNac='$fechaNac',dpto='$dpto' where id=$id_persona";
        $resultado=$db->query($query);
        if($db->affected_rows){
            return true;
        }
        return false;
    }
    public static function delete($id_persona){
        $db = new Connection();
        $query = "DELETE from persona where id=$id_persona";
        $resultado=$db->query($query);
        if($db->affected_rows){
            return true;
        }
        return false;
    }
}
?>