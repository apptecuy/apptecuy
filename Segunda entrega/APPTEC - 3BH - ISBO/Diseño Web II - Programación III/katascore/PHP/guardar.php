<?php

$host = "localhost"; // 
$usuario = "root";
$contrasena = "";
$base_de_datos = "bdkatascore";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$mail = $_POST["mail"];
$id_competidor = $_POST["id_competidor"];
$ranking = $_POST["ranking"];
$sexo = $_POST["sexo"];
$fecha_nac = $_POST["fecha_nac"];
$escuela = $_POST["escuela"];


$query = "INSERT INTO competidor (nombre, apellido, mail, id_competidor, ranking, sexo, fecha_nac, escuela) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conexion->prepare($query);


$stmt->bind_param("ssssssss", $nombre, $apellido, $mail, $id_competidor, $ranking, $sexo, $fecha_nac, $escuela);

if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
