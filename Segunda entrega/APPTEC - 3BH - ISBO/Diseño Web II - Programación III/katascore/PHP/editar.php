<?php

include("conectar2.php");
$id = $_GET['id'];
$con = conectar();
$sql = "SELECT * FROM competidor WHERE id_competidor = '$id'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/editar.css">
    <title>Editar competidor</title>
</head>
<body>
  
    <div class="editar">
        <h1>Actualizar datos de competidor</h1>
       <br>
        <form action="actualizar.php" method="post">
            
            <label for="nombre">Nombre:</label><br>
            <p><input type="text" name="nombre" value="<?= $fila['nombre']?>"></p>
            <label for="apellido">Apellido:</label><br>
            <p><input type="text" name="apellido" value="<?= $fila['apellido']?>"></p>
            <label for="mail">Email:</label><br>
            <p><input type="email" name="mail" value="<?= $fila['mail']?>"></p>
            <label for="cedula">Cédula de Identidad:</label><br>
            <p><input type="text" name="id_competidor" value="<?= $fila['id_competidor']?>"></p>
            <label for="ranking">Ranking:</label><br>
            <p><input type="text" name="ranking" value="<?= $fila['ranking']?>">
            <br>
            <br>
            <label for="sexo">Sexo:</label>
            <p><input type="text" id="sexo" name="sexo" value="<?= $fila['sexo']?>">

        </p>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <p><input type="date" name="fecha_nac" value="<?= $fila['fecha_nac']?>"></p>
            
            <label for="entidad_afiliada">Entidad Afiliada:</label>
            <p><select class="options" name="escuela"  value="<?= $fila['escuela']?>">
            <option value="Dojo 1">ASOCIACIÓN URUGUAYA DE KARATE</option>
            <option value="Dojo 2">SHOTOKAN KARATE DO INTERNATIONAL FEDERATION URUGUAY</option>
            <option value="Dojo 3">ASOCIACIÓN DE KARATE Y KOBUDO DEL URUGUAY</option>
            <option value="Dojo 4">INSTITUTO DE KARATE TRADICIONAL URUGUAYO</option>
            <option value="Dojo 5">ESCUELA URUGUAYA DE KARATE - JITSU</option>
            <option value="Dojo 6">ISKF URUGUAY</option>
            <option value="Dojo 7">ASOCIACIÓN CIVIL DE ESCUELAS KETSUGO</option>
            <option value="Dojo 8">SOCIEDAD ORIENTAL DE KARATE</option>
            <option value="Dojo 9">ASOCIACION SHOBU-RYU DE ARTES MARCIALES</option>
            <option value="Dojo 10">ASOCIACIÓN SHITO-RYU KARATE DO URUGUAY</option>
            <option value="Dojo 11">ASOCIACIÓN INTERNACIONAL KEN SHIN-KAN KARATE DO</option>
            <option value="Dojo 12">ASOCIACIÓN BUSHIDO KAN</option>
            <option value="Dojo 13">ASOCIACIÒN SHORIN-RYU SHIN-SHU-KAN KARATE-DO & KOBU-DO URUGUAY.</option>
            <option value="Dojo 14">ASOCIACIÓN DE KARATE KYOKUSHIN UNION URUGUAY</option>
            <option value="Dojo 14">UNK UNION NACIONAL DE KARATE</option>
        </select>
        </p>
        <br>
            <input type="submit" class="actualizar" value="Actualizar" name="actualizar" >
        
        </form>
    </div>
  
    
</body>
</html>