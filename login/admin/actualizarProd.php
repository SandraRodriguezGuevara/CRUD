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
            <a href="subirProducto.php">Productos</a>
            <a href="../cerrar_sesion.php">cerrar sesion</a>
            
        </nav>
    </header>
    <main class="cont-productos">
        <div class="box-prod">
            <form class="form-prod" action="actualizar.php" method="POST">

            <?php
            include '../includes/db.php';
            $id = $_GET['id'];
            $sql = "SELECT * FROM productos WHERE id = $id";

            $resultado = $conn->query($sql);
            $num_rows = $resultado->num_rows;
            while ($row = $resultado->fetch_assoc()) {

            

            ?>
                <label for="">Producto:</label>
                <input type="text" name="prod" value="<?php echo $row['producto']; ?>">
                <label for="">Descripcion del producto:</label>
                <input type="text" name="desc" value="<?php echo $row['descripcion']; ?>">
                <label for="">Precio:</label>
                <input type="text" name="precio" value="<?php echo $row['precio']; ?>">
                
                <div class="cont-btn">
                    <button hrf="" class="btn-reg" type="submit">Actualizar</button>
                </div>
              <?php
              }
              ?>  

            </form>
        </div>
    </main>
</body>
</html>