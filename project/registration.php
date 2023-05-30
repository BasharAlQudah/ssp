<?php
$hn = 'localhost';
$db = 'id20376587_elearning';
$un = 'id20376587_elearning';
$pw = 'eLearning@123';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted registration data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to insert the user's registration data
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    // Redirect the user to a success page or another appropriate location
    header("Location: index.php");
    exit();
}

$conn->close();
?>