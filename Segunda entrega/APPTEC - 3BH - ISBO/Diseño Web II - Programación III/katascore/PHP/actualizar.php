<?php

require ("conectar2.php");
$con = conectar();
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["mail"];
$id = $_POST["id_competidor"];
$ranking = $_POST["ranking"];
$sexo = $_POST["sexo"];
$fecha_nac = $_POST["fecha_nac"];
$escuela = $_POST["escuela"];


    $sql = "UPDATE competidor SET 
          id_competidor='$id',
          nombre='$nombre',
          apellido='$apellido',
          sexo='$sexo',
          ranking='$ranking',
          fecha_nac='$fecha_nac', 
            mail='$email',
            escuela='$escuela' 
            WHERE `id_competidor`='$id'";
    $resultado = mysqli_query($con,$sql);
    // if($resultado) echo "todo bien";
    Header("location:modificar.php");




?>
