<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = ""; // Cambia esto por tu contraseña de MySQL
$dbname = "bdkatascore"; // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña = $_POST["contraseña"];

    // Consulta SQL para verificar las credenciales del usuario y obtener el tipo de usuario
    $sql = "SELECT * FROM usuario WHERE nombre_usuario = '$nombre_usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $tipo = $row["tipo"]; // Asume que el campo se llama "tipo_usuario"

        // Inicio de sesión exitoso
        session_start();
        $_SESSION["nombre_usuario"] = $nombre_usuario;

        // Redirige al menú correspondiente según el tipo de usuario
        if ($tipo === "administrador") {
            header("location: /Admin/menu_admin.html"); // Redirige al menú del administrador
        } elseif ($tipo === "juez") {
            header("location: menu_juez.html"); // Redirige al menú del juez
        } else {
            echo "Tipo de usuario desconocido.";
        }
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}

$conn->close();
?>
