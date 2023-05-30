<?php
$hn = 'localhost';
$db = 'id20376587_elearning';
$un = 'id20376587_elearning';
$pw = 'eLearning@123';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query to check if the username and password exist in the users table
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Redirect to courses.php after successful login
        header("Location: courses.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>