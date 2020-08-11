<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <header>
        <div class="contenedor">
        <input type="checkbox" class="checkbox" id="check">
        <label class="menu fa fa-bars" for="check" id="menu"></label>
        <div class="left-panel" id="panel">
            <ul>
                <a href="contenido.php"><li>Inicio</li></a>
                <a href="productos.php"><li>Ingresa productos</li></a>
                <a href="nissan.php"><li>Nissan</li></a>
                <a href="volkswagen.php"><li>Volkswagen</li></a>
                <a href="ford.php"><li>Ford</li></a>
                <a href="ibiza.php"><li>Ibiza</li></a>
                <a href="toyota.php"><li>Toyota</li></a>
                <a href="KIA.php"><li>KIA</li></a>
                <a href="chevrolet.php"><li>Chevrolet</li></a>
                <a href="contacto.php"><li>Contacto</li></a>
                <a href="ubicacion.php"><li>Ubicación</li></a>
            </ul>
        </div>


        <img class="logo" src="../img/logo.png" alt="">
           <div class="contenedor-texto">
               <div class="texto">
                   <aside class="profesion">Refaccionaria Automotriz</aside>
                   <aside class="nombre">"TORIZ"</aside>
                   <div class="reset"></div>
               </div>

               <div class="derecha" id="derecha">
                   <form action="<?php echo RUTA; ?>/buscar.php" class="buscar" name="busqueda" method="get" id="buscar">
                        <input type="text" name="busqueda" placeholder="Buscar" id="input">
                        <button type="submit" class="icono fa fa-search" id="icono"></button>
                    </form>
                </div>


               <i class="carrito fa fa-shopping-cart"></i>
           </div>
           
        </div>
    </header>