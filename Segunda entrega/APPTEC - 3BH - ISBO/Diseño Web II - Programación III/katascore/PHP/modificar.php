<?php
 require("conectar2.php");
 $conn = conectar();
 
 $sql = "SELECT * FROM competidor";
 $resultado = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/modificar.css">
    <title>Document</title>
</head>
<body>
<div class="modificar">
     <div class ="cabecera">
         <h1>Competidores inscriptos:</h1> 
           <select name="categoria" id="categoria"class="categoria">
               <option value="12/13">Categoria 12/13</option>
               <option value="14/15">Categoria 14/15</option>
               <option value="16/17">Categoria 16/17</option>
                <option value="MAYORES">Categoria MAYORES</option>
           </select>
             <img src="../IMG/LogoCuk.png" alt="Logo" class="logo" height="120px" width="120px">
    </div>
        <br>
<br>

       <div class="titulos">
        
            
              <p class="id"> Cedula de identidad</p>
                <p class="nombre">Nombre</p>
                <p class="apellido">Apellido</p>
                <p class="sexo">Sexo</p>
                <p class="fecha_nac">Fecha de nacimiento</p>
                <p class="escuela">Escuela</p>
                <p class="ranking"> Ranking</p>
                
                
           
            </div>
            <br>
        
        <br>
        <div class="modificarinfo">
        <table width="100%" cellpadding="5" cellspacing="4" >
            <?php while($fila = mysqli_fetch_array($resultado)) :?>
           
             <tr >
                
                <th><?= $fila['id_competidor']?></th> 
                <th ><?= $fila['nombre']?></th>
                <th><?= $fila['apellido']?></th>
                <th><?= $fila['sexo']?></th> 
                <th><?= $fila['fecha_nac']?></th>
                <th><?= $fila['escuela']?></th>
                <th><?= $fila['ranking']?></th>
                <th><a href="editar.php?id= <?= $fila['id_competidor'] ?>"><button>Editar</button></a></th>
                <th><a href="eliminar.php?id= <?= $fila['id_competidor'] ?>"><button>Eliminar</button></a></th>
            </tr>
            </div>
            <br>
            <?php endwhile;?>
        </table>
     
       </div>
       

</body>
</html>