<?php
// Version en Español.
// Conexión a la base de datos (supón que la base de datos ya existe)
$conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta SQL vulnerable
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

<!-- Formulario de inicio de sesión -->
<form method="POST">
    Usuario: <input type="text" name="usuario" required>
    Contraseña: <input type="password" name="password" required>
    <input type="submit" value="Iniciar sesión">
</form>
