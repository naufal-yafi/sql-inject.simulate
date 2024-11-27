<?php

require_once '../../app/db_connect.php';

$conn = connectDatabase();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Login successful! Welcome " . $row['username'];
    } else {
        echo "Invalid credentials.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - Hacked</title>
</head>
<body>
    <h1>Login Page - Hacked</h1>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
