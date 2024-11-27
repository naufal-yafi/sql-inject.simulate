<?php

$BASE_URL = "../..";
require_once "$BASE_URL/app/db_connect.php";
require_once "$BASE_URL/components/alert.php";
require_once "$BASE_URL/components/page.php";

$conn = connectDatabase();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo phpAlert("success", "Welcome $row[username], login success.");
    } else {
        echo phpAlert("error", "Username or Password is wrong!");
    }
}

echo loginPage('Login - Secure Injection');

?>
