<?php
// Version en Español.
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Uso de consultas preparadas para prevenir inyecciones SQL
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
    $stmt->bind_param("ss", $usuario, $password); // 'ss' indica que estamos pasando dos cadenas

    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($usuario) . "!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

    $stmt->close();
}
?>

<!-- Formulario de inicio de sesión -->
<form method="POST">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="password" required>
    <input type="submit" value="Iniciar sesión">
</form>
