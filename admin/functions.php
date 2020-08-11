<?php

function conexion($bd_config){
	try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basededatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function obtener_refacciones($conexion){
	$statement = $conexion->prepare("SELECT * FROM refacciones");
	$statement->execute();

	return $statement->fetchAll();
}

//funcion que comprueba que haya una sesion iniciada
function comprobarSession(){
    if(!isset($_SESSION['usuario'])){
        header('Location: ' . RUTA);
    }
}

 ?>