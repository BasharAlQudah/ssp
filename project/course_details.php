<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col">

          </div>
          <div class="col">

          </div>
        </div>
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col-6 box">
            <?php
    $hn = 'localhost';
    $db = 'id20376587_elearning';
    $un = 'id20376587_elearning';
    $pw = 'eLearning@123';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $courseId = $_GET['id'];

        // Prepare and execute the SQL query to fetch course details
        $stmt = $conn->prepare("SELECT * FROM courses WHERE id = ?");
        $stmt->bind_param("i", $courseId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            // Fetch the course details
            $course = $result->fetch_assoc();
            $courseTitle = $course['title'];
            $courseDescription = $course['description'];
            $coursePrice = $course['price'];
            $courseDuration = $course['duration'];
// Close the database connection
            $stmt->close();
            $conn->close();

            // Display the course details
            echo "<html>";
            echo "<head>";
            echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";
            echo "</head>";
            echo "<body>";
            echo "<div class='course-details'>";
            echo "<h2>$courseTitle</h2>";
            echo "<p>$courseDescription</p>";
            echo "<p>Price: $coursePrice</p>";
            echo "<p>Duration: $courseDuration</p>";
            echo "</div>";
            echo "<a href='courses.php' class='btn-back'>Back to Courses</a>";
            echo "</body>";
            echo "</html>";
            exit();
        }
    }

    $conn->close();
    ?>
          </div>
          <div class="col">

          </div>
        </div>
      </div>

</body>
</html>