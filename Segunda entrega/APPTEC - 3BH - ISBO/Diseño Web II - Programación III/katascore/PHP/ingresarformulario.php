<?php

$conexion = mysqli_connect("localhost", "root","", "bdkatascore");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $lugar = $_POST["lugar"];

    $sql = "INSERT INTO competencia (nombre, fecha, hora, lugar) VALUES (?, ?, ?, ?)";
    
    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssss", $nombre, $fecha, $hora, $lugar);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro: " . mysqli_error($conexion);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error de conexion a la BD: " . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>