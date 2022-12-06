<?php



include '../includes/db.php';
    $produ = $_POST['prod'];
    $desc = $_POST['desc'];
    $precio = $_POST['precio'];


    $sql = "INSERT INTO productos (producto, descripcion, precio)VALUE('$produ','$desc','$precio')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
          header('Localhost: subirProducto.php');
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);