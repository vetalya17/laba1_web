<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Voloshin Vitaliy KS-32</title>
</head>
  <body>
    
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Laba 1</a>
        <span class="right">
          <a href="log_in.php" class="btn btn-light" role="button" aria-pressed="true">Log in</a>
        </span>
    </nav><br>

    <div class="container mt-4">

    <h2>Registration form</h2><br>
          <form action="check.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" minlength="3" required><br>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name"minlength="3" required><br>
            <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail" required><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"minlength="6" required><br>
            <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Re-Enter Password" minlength="6" required><br>
            <select class="custom-select" name="role">
              <option selected value="1">User</option>
              <option value="2">Admin</option>
            </select><br><br>
            <form method="post" enctype="multipart/form-data">
              <input type="file"  name="fileToUpload" id="fileToUpload">
              <button class="btn btn-secondary" type="submit">Sign in</button><br> 
            </form><br>
          </form> 
        </div>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>V. N. Karazin Kharkiv National University | Voloshin Vitalik</small>
      </div>
    </footer>
    
  </body>
</html>