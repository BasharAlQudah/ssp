<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
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
          <div class="col">

          </div>
          <div class="col box">
            <h2>delete user</h2>
            <form action="del.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <input type ="hidden" name="delete" value="yes">
                <input type = "submit" value="delete record" class='btn btn-primary'>
                <a href='index.php' class='btn btn-primary'>Back to Courses</a>
            </form>
          </div>
          <div class="col">

          </div>
        </div>
      </div>

</body>
</html>


<?php
    require_once 'connection.php';

    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) {
        die($conn->connect_error);
    }

   if (isset($_POST['delete'])&& isset($_POST['username'])&& isset($_POST['password'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $query = "DELETE FROM users WHERE username='$username' and password = '$pass'";
    $res= $conn->query($query);
    if(!$res)die($conn->error);
}

?>