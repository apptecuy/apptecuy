<?php

include("PHP/conectar.php");
$conn = conectar();

if(isset($_POST['Registrar']) &&
strlen($_POST['nombre']) >= 1 &&
strlen($_POST['apellido']) >= 1 &&
strlen($_POST['mail']) >= 1 &&
strlen($_POST['id_competidor']) >= 1 &&
strlen($_POST['ranking']) >= 1 &&
strlen($_POST['sexo']) >= 1 &&
strlen($_POST['fecha_nac']) >= 1 &&
strlen($_POST['escuela']) >= 1  )
{
$id_competidor = $_POST['id_competidor'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$mail = $_POST['ranking'];
$mail = $_POST['sexo'];
$mail = $_POST['fecha_nac'];
$escuela = $_POST['escuela'];

$sql = "INSERT INTO competidor VALUES('$id_competidor', '$nombre','$apellido', '$mail', '$ranking', '$sexo', '$fecha_nac', '$escuela')";
$res = mysqli_query($conn,$sql);

echo $res ? "registro creado con éxito" : null;

}

?>