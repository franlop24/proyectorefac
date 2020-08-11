<?php session_start();

//importamos los archivos de configuracion y las funciones
require 'config.php';
require 'functions.php';

//inicia conexion
$conexion = conexion($bd_config);

//protege la vista
comprobarSession();

//Falta agregar el archivo de error
if(!$conexion){
    //header('Location: ../error.php')
    echo "<h2>Error</h2>";
}

//llama a la funcion que regresa la lista de refacciones
$refacciones = obtener_refacciones($conexion);

require 'productos.view.php';

?>
