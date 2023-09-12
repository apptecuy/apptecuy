<?php

function conectar(){
    
    $host = "localhost";
    $usr = "root";
    $pwd = "";
    $bd = "bdkatascore";

    $conn = new mysqli($host, $usr, $pwd, $bd);


    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);

    return $conn;
}}

?>

