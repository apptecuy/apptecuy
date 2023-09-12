<?php
include("conectar2.php");

$id = $_GET['id'];
$con = conectar();
$sql = "DELETE FROM competidor WHERE id_competidor = '$id'";
$res = mysqli_query($con, $sql);

Header("Location:modificar.php");

?>
