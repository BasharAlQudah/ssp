<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bashar and Omar</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .button-space {
            margin-right: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>
<?php
require_once 'login.php';

echo '<link rel="stylesheet" href="css/style.css">';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "<H1>courses</H1>";

// Retrieve the courses from the database
$query = "SELECT * FROM courses";
$result = $conn->query($query);

// Check if there are any courses
if ($result->num_rows) {
    // Start generating the HTML code
    echo '<div class="container">';
    echo "<h1>Courses</h1>";
    echo '<a href="index.php" class="btn btn-primary">Logout</a>'; // Added logout button
    echo '<a href="change_password.php" class="btn btn-primary" margin="10px">Change Password</a>';
    // Add the new button to redirect to the password change page
 
    echo '</div>';
    echo '<div class="row">';

    // Loop through each course
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];

        // Generate the HTML for each course
        echo '<div class="col-md-4 box">';
        echo ' <div class="card mb-4">';
        echo '<div class="card-body">';
        echo "<h5 class='card-title'>$title</h5>";
        echo "<p class='card-text'>$description</p>";
        echo "<a href='course_details.php?id=$id' class='btn btn-primary'>View Details</a>";
       // echo " <button class='col-sm btn btn-primary'>Enroll in Course</button>";
        echo "</div></div></div>";
    }

    // Display the generated HTML
}

$conn->close();
?>
</body>
</html>