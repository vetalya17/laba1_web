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




      <?php
      
      $conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      
        
         
          <?php while(($row = $result->fetch_assoc()) != false) { 
            if($row["id"] == $_GET["id"]) { ?>
          
            


    




    <h2>Change form</h2> 
          <form action="change_bd.php" method="post" enctype="multipart/form-data"><br>

            <img width="100" src="<?php print($row["photo"])?>"><br><br>
            <input type="text" class="form-control" name="id" id="id" value="<?php print($row["id"]) ?>" minlength="" disabled><br>
            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php print($row["first_name"]) ?>" minlength="3" required><br>
            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php print($row["last_name"]) ?>"minlength="3" required><br>
            <input type="email" class="form-control" name="mail" id="mail" value="<?php print($row["email"]) ?>" required><br>
             <?php session_start(); 
             if($_SESSION['user_id'] == 1) { ?>
            <input type="password" class="form-control" name="pass" id="pass" value="<?php print($row["password"]) ?>"minlength="6" disabled><br> 
              <?php } else{  ?>
            <input type="password" class="form-control" name="pass" id="pass" value="<?php print($row["password"]) ?>"minlength="6" required><br>
              <?php } ?>
            <select class="custom-select" name="role">
              <?php if($row["role_id"] == 1){ ?>
              <option selected value="1">User</option>
              <option  value="2">Admin</option>
            <?php } else {?>
              <option  value="1">User</option>
              <option selected value="2">Admin</option>
            <?php } ?>
            </select><br><br>
            <form method="post" enctype="multipart/form-data">
              <input type="file"  name="fileToUpload" id="fileToUpload" >
              <button class="btn btn-secondary" type="submit">Sign in</button><br> 
            </form><br>
          </form> 
        </div>
        <?php } }?>

       
      <?php $conn->close();   ?>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>V. N. Karazin Kharkiv National University | Voloshin Vitalik</small>
      </div>
    </footer>
    
  </body>
</html>