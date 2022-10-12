<?php
require_once "models/Persona.php";

switch($_SERVER['REQUEST_METHOD']){
    case 'GET':
        if(isset($_GET['id'])){
            echo json_encode(Persona::getWhere($_GET['id']));

        }
        else{
        echo json_encode(Persona::getAll());
        }
        break;
    case 'POST':
        $datos= json_decode(file_get_contents('php://input'));
        if($datos != NULL){
            if(Persona::insert($datos->ci,$datos->nombre,$datos->fechaNac,$datos->dpto,)){
                http_response_code(200);
            }
            else{
                http_response_code(400);
            }

        }
        break;
    case 'PUT':
        $datos= json_decode(file_get_contents('php://input'));
        if($datos != NULL){
            if(Persona::update($datos->id,$datos->ci,$datos->nombre,$datos->fechaNac,$datos->dpto,)){
                http_response_code(200);
            }
            else{
                http_response_code(400);
            }

        }
        break;
    case 'DELETE':
        if(isset($_GET['id'])){
            if(Persona::delete($_GET['id'])){
                http_response_code(200);
            }
            else{
                http_response_code(400);
            }

        }

        break;
    default:
        break;


}
?>