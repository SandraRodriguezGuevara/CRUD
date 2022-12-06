<?php
include'../seguridad.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <header class="barra">
        <h1>Tiendita de la Esquina</h1>

        <nav class="barra-nav">

            <a href="index.php">Inicio</a>
            <a href="subirProducto.php">subir Productos</a>
            <a href="../cerrar_sesion.php">cerrar sesion</a>
            
        </nav>
    </header>

    <main class="cont-productos">
        <div class="box-prod">
            <form class="form-prod" action="registrarProducto.php" method="POST">
                
                <label for="">Producto:</label>
                <input type="text" name="prod">
                <label for="">Descripcion del producto:</label>
                <input type="text" name="desc">
                <label for="">Precio:</label>
                <input type="text" name="precio">
                
                <div class="cont-btn">
                    <button class="btn-reg" type="submit">Registrar</button>
                </div>
                

            </form>
        </div>
    </main>
</body>
</html>