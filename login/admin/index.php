<?php
include'../seguridad.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
    <meta name="author" content="Marco Robles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<header class="barra">
        <h1>Tiendita de la Esquina</h1>

        <nav class="barra-nav">

            <a href="#">Inicio</a>
            <a href="subirProducto.php">subir producto</a>
            <a href="../cerrar_sesion.php">cerrar sesion</a>
            
        </nav>
    </header>
    <main>
        <div class="container py-4 text-center">
            <h2>Pruductos </h2>
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <form action="" method="post">
                        <label for="campo">Buscar: </label>
                        <input type="text" name="campo" id="campo">
                    </form>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>producto</th>
                            <th>descripcion</th>
                            <th>precio</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="../js/main.js">
            
    </script>
    <script>
        /* Llamando a la funci??n getData() */
        getData()
        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la funci??n getData. */
        document.getElementById("campo").addEventListener("keyup", getData)
        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "load.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>