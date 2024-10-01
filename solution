<?php
// Version in English.
// Database connection
$connection = new mysqli("localhost", "user", "password", "database");

if ($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injections
    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password); // 'ss' indicates we're passing two strings

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful. Welcome, " . htmlspecialchars($username) . "!";
    } else {
        echo "Incorrect username or password.";
    }

    $stmt->close();
}
?>

<!-- Login form -->
<form method="POST">
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <input type="submit" value="Login">
</form>
