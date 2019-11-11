<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Voloshin Vitaliy KS-32</title>
</head>
  <body>
    <?php session_start(); ?>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> Laba 1</a>
        <span class="right">
        
        <?php if (empty($_SESSION['user'])): ?>
          <a href="log_in.php" class="btn btn-secondary" role="button" aria-pressed="true">Logii in</a>
          <a href="sign_in.php" class="btn btn-light" role="button" aria-pressed="true">Sign in</a> 
        <?php else: ?>
          <img src="<?=$_SESSION['photo']?>" width="30" height="30" class="d-inline-block align-top" alt=""><?=$_SESSION['user']?></a>
          <a href="exit.php" class="btn btn-light" role="button" aria-pressed="true">Exit</a>
        
     <?php endif; ?>
     </nav>
      </span>
    <?php
      if (!empty($_SESSION['user']) && ($_SESSION['user_id'] == 2)):{
      $conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>email</th>
            <th>Password</th>
            <th>Role_id</th>
            <th>Photo</th>
            <th></th>
          </tr>
        </thead>
        <tbody> 
          <?php while(($row = $result->fetch_assoc()) != false) { echo 
            "<tr>
              <th>"
                ."<a  href='person_page.php?id=".$row['id']."'>".$row['id']."</a>".
              "</th>" ?>
              <td><?php print($row["first_name"]) ?></td>
              <td><?php print($row["last_name"]) ?></td>
              <td><?php print($row["email"]) ?></td>
              <td><?php print($row["password"]) ?></td>
              <td><?php print($row["role_id"]) ?></td>
              <td><img width="30" src="<?php print($row["photo"])?>"></td> <?php echo 
              "<td>"
                  ."<a  href='person_change.php?id=".$row['id']."'  >Change</a>".
              "</td>" ?>
              <td>
                <form action="delete.php" method="post">
                  <input type="hidden" name="deleteuserid" value="<?php print($row['id']) ?>">
                  <input type="submit" name="Delete" value="Delete" title="Delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>  
      <?php $conn->close(); } ?>


      <?php
      elseif (!empty($_SESSION['user']) && ($_SESSION['user_id'] == 1)):{
      $conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>email</th>
            <th>Role_id</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody> 
          <?php while(($row = $result->fetch_assoc()) != false) { echo 
            "<tr>
              <th>"
                ."<a  href='person_page.php?id=".$row['id']."'>".$row['id']."</a>".
              "</th>" ?>
            <td><?php print($row["first_name"]) ?></td>
            <td><?php print($row["last_name"]) ?></td>
            <td><?php print($row["email"]) ?></td>
            <td><?php print($row["role_id"]) ?></td>
            <td><img width="30" src="<?php print($row["photo"])?>"></td> 
          </tr>
          <?php } ?>
        </tbody>
      </table>  
      <?php $conn->close();  } ?>


      <?php
      else:{
            $conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>email</th>
            <th>Role_id</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody> 
          <?php while(($row = $result->fetch_assoc()) != false) { echo 
            "<tr>
              <th>"
                ."<a  href='person_page.php?id=".$row['id']."'>".$row['id']."</a>".
              "</th>" ?>
            <td><?php print($row["first_name"]) ?></td>
            <td><?php print($row["last_name"]) ?></td>
            <td><?php print($row["email"]) ?></td>
            <td><?php print($row["role_id"]) ?></td>
            <td><img width="30" src="<?php print($row["photo"])?>"></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>  
      <?php $conn->close();  } endif; ?>
      



    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>V. N. Karazin Kharkiv National University | Voloshin Vitalik</small>
      </div>
    </footer>
    
  </body>
</html>
