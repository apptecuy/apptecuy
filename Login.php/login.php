<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Realizar la validación de los datos ingresados
    // compararlos con los registros en tu base de datos

    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "usuarios";

 
    $conn = new mysqli($servername, $username, $password_db, $dbname);

  
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $_SESSION["email"] = $email;
        header("Location: login.php");
        exit();
    } else {
        echo "Credenciales inválidas. Por favor, intenta nuevamente.";
    }

    $conn->close();
}
?>
