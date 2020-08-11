<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: admin/indexadmin.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $passwordp = $_POST['passwordp'];
    $passwordp = hash('sha512', $passwordp);

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=refaccionariatoriz', 'root', '');
    }catch (PDOException $e){
        echo "Error:" . $e->getMessage();
    }

    $statement = $conexion->prepare('
    SELECT * FROM usuario WHERE usuario = :usuario AND pass = :passwordp'
);
    $statement->execute(array(
        ':usuario' => $usuario, 
        ':passwordp' => $passwordp
    ));

    $resultado = $statement->fetch();
    if ($resultado == false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: admin/indexadmin.php');
    } else {
        $errores .= '<li> Datos incorrectos</li>';
    }
}

require 'views/login.view.php';

?>