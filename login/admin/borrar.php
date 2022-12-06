<?php
include '../includes/db.php';

$id = $_GET['id'];



$sql = "DELETE FROM productos WHERE id = $id";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('Location: index.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);