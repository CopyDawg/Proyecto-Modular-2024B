<?php
include 'conexion.php'; // Ajusta la ruta si está en otro directorio

if ($conexion) {
    echo 'Conexión exitosa a la base de datos.';
} else {
    echo 'No se pudo conectar a la base de datos.';
}
?>
