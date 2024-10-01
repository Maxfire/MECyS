<?php
// Version in English
// Database connection (assume the database already exists)
$connection = new mysqli("localhost", "user", "password", "database");

if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable SQL query
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        echo "Login successful. Welcome, " . $username . "!";
    } else {
        echo "Incorrect username or password.";
    }
}
?>

<!-- Login form -->
<form method="POST">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <input type="submit" value="Login">
</form>
