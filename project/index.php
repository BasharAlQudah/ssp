<!DOCTYPE html>
<html>
<head>
    <title>e-Learning System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="padding: 100px;" >
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
          <div class="col">
            <div class=" box  flex-column ">
                <div class="login-box  ">
                        <div class=" container ">
                            <h2>Login</h2>
                                <form action="login.php" method="POST" class="row  ">
                                    <div class="user-box col-6">
                                            <input type="text" name="username" required="">
                                            <label>Username</label>
</div>
                                    <div class="user-box col-12 ">
                                            <input type="password" name="password" required="">
                                            <label>Password</label>
                                    </div>
                                <div class="container">
                                         <button type="submit " class="btn btn-primary col-6">Login</button>
                                </form>
                                        <form action="registration.html" method="POST" class="">
                                            <button class="btn btn-primary col-6">Register</button>
                                        </form>
                                </form>
                                 <form action="del.php" method="POST">
                                        <input type ="hidden" name="delete" value="yes">
                                        <input type="submit" value="Delete User" name="del" class="btn btn-primary col-6">
                                    </form>
                                </div>

                    </div>
                </div>
        </div>
          </div>
          <div class="col">
          </div>
        </div>
      </div>


    <div class="center">

</div>
</body>
</html>