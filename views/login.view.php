<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Inicia sesión</title>
</head>
<body>
<header>
    <div class="contenedorr">
        <img class="logo" src="img/logo.png" alt="">
           <div class="contenedorr-texto">
               <div class="texto">
                   <aside class="profesion">Refaccionaria Automotriz</aside>
                   <aside class="nombre">"TORIZ"</aside>
                   <div class="reset"></div>
               </div>
           </div> 
    </div>
</header>

    <div class="contenedor">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <h1 class="titulo">Inicia sesión</h1>
            
            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Nombre">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="passwordp" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="submit-btn" onclick="login.submit()">Ingresar</i>
            </div>
<br>
            <p class="texto-registrate">
                ¿ No tienes cuenta ?
                <a href="registro.php">Registrate</a>
            </p>
        </form>

    </div>
</body>
</html>