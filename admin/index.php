<?php

session_start();

//importamos los archivos de configuracion y las funciones
require 'config.php';
require 'functions.php';

//inicia conexion
$conexion = conexion($bd_config);

//esta funcion esta en functions.php y verifica que se haya iniciado con el login
//Para proteger los otros archivos es solo incluyendo esta funcion
comprobarSession();

//Falta agregar el archivo de error
if(!$conexion){
	//header('Location: ../error.php')
	echo "<h2>Error</h2>";
}

require 'indexadmin.view.php';

 ?>