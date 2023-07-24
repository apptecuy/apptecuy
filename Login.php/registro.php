<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password != $confirm_password) {
        echo "Las contraseñas no coinciden. Por favor, intenta nuevamente.";
        exit();
    }

    // Realizar la validación de los datos ingresados
    // El correo electrónico no tiene q estar registrado previamente

   
    $servername = "localhost";
    $username = "root";
    $password_db = "emi093908463";
    $dbname = "usuarios";

  
    $conn = new mysqli($servername, $username, $password_db, $dbname);

    
    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        echo "Error en el registro: " . $conn->error;
    }

    $conn->close();
}
?>
