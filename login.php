<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "mylogin_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User authenticated successfully
    echo "Login successful!";
} else {
    // Authentication failed
    echo "Login failed! \n Please sign-up first!!";
}

$conn->close();
?>