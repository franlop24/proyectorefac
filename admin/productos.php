<?php session_start();

require 'productos.view.php';

if($_SESSION['rol'] != 1)
{
    header("location: ./");
}

try {
    $conexion = new PDO('mysql:host=localhost;dbname=refaccionariatoriz', 'root', '');
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
    {
        $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{

        $nombre = $_POST['nombre'];
        $email  = $_POST['correo'];
        $user   = $_POST['usuario'];
        $clave  = md5($_POST['clave']);
        $rol    = $_POST['rol'];


        $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email' ");
        $result = mysqli_fetch_array($query);

        if($result > 0){
            $alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
        }else{

            $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave,rol)
                                                                VALUES('$nombre','$email','$user','$clave','$rol')");
            if($query_insert){
                $alert='<p class="msg_save">Usuario creado correctamente.</p>';
            }else{
                $alert='<p class="msg_error">Error al crear el usuario.</p>';
            }

        }


    }

}



?>
