<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: admin/indexadmin.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $passwordp = $_POST['passwordp'];
    $passwordd = $_POST['passwordd'];


    /*errores*/
    $errores = '';

    if (empty($usuario) or empty($passwordp) or empty($passwordd)){
        $errores .= '<li>Todos los campos son obligatorios</li>';
    } else {

        /*conexion de base de datos*/
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=refaccionariatoriz', 'root', '');
        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        /*consulta de comprobacion de usuarios*/
        $statement = $conexion->prepare('SELECT * FROM usuario where usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado != false){
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }

        /*encriptar contraseñas del usuario*/

        $passwordp =hash('sha512', $passwordp);
        $passwordd =hash('sha512', $passwordd);
        
        /*comprobacion de contraseñas*/
        if ($passwordp != $passwordd) {
            $errores .= '<li>Las contraseñas no son iguales</li>';
        }
    }

    /*insertar al usuario en la base de datos y se redirige al inicio de sesion*/
    if($errores == ''){
        $statement = $conexion->prepare('INSERT INTO usuario (id, usuario, pass) VALUES (null, :usuario, :pass)');
        $statement->execute(array(
            ':usuario' => $usuario,
            ':pass' => $passwordp
        ));

        header('Location: login.php');
    }
}
require 'views/registro.view.php';

?>