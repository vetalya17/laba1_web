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
          <a href="sign_in.php" class="btn btn-light" role="button" aria-pressed="true">Sign in</a>
        </span>
    </nav><br>
    
    <div class="container mt-4">
      <h2>Authorization form</h2><br>
      <form action="auth.php" method="post">
        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail"><br>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
        <button class="btn btn-secondary" type="submit">Log in</button><br> 
      </form>  
    </div>
          
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>V. N. Karazin Kharkiv National University | Voloshin Vitalik</small>
      </div>
    </footer>
    
  </body>
</html>