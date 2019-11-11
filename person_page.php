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
     
     <?php
     session_start();
      if($_SESSION['id_id'] == $_GET["id"] && $_SESSION['user_id'] == 1) {
      $conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      <table class="table">
        
        <tbody> 
          <?php while(($row = $result->fetch_assoc()) != false) { 
            if($row["id"] == $_GET["id"]) { ?>
          <tr>
            <th>Photo</th>
            <td><img width="100" src="<?php print($row["photo"])?>"></td>


          </tr>
          <tr>
            <th>ID</th>
            <td><?php print($row["id"]) ?></td>
          </tr>
          <tr>
            <th>Name</th>
            <td><?php print($row["first_name"]) ?></td>
           </tr> 
           <tr>
            <th>Surname</th>
            <td><?php print($row["last_name"]) ?></td>

            </tr> 
           <tr>
            <th>email</th>
            <td><?php print($row["email"]) ?></td>

            </tr> 
           <tr>
            <th>Password</th>
            <td><?php print($row["password"]) ?></td>

            </tr> 
           <tr>
            <th>Role_id</th>
            <td><?php print($row["role_id"]) ?></td>
            <?php 
            
              echo 
              "<td>"
                  ."<a  href='person_change.php?id=".$row['id']."'  >Change</a>".
              "</td>"

            ?>

            </tr> 
           
          <?php } }?>
        </tbody>
      </table>  
      <?php $conn->close();  
} 




else{

$conn = new mysqli('localhost', 'root', '', 'lb1');
      if($conn->connect_error) {}
      $sql = "SELECT id, first_name, last_name, email, password, photo, role_id FROM users";
      $result = $conn->query($sql); ?> 
      <table class="table">
        
        <tbody> 
          <?php while(($row = $result->fetch_assoc()) != false) { 
            if($row["id"] == $_GET["id"]) { ?>
          <tr>
            <th>Photo</th>
            <td><img width="100" src="<?php print($row["photo"])?>"></td>


          </tr>
          <tr>
            <th>ID</th>
            <td><?php print($row["id"]) ?></td>
          </tr>
          <tr>
            <th>Name</th>
            <td><?php print($row["first_name"]) ?></td>
           </tr> 
           <tr>
            <th>Surname</th>
            <td><?php print($row["last_name"]) ?></td>

            </tr> 
           <tr>
            <th>email</th>
            <td><?php print($row["email"]) ?></td>

            </tr> 
           <tr>
            <th>Password</th>
            <td><?php print($row["password"]) ?></td>

            </tr> 
           <tr>
            <th>Role_id</th>
            <td><?php print($row["role_id"]) ?></td>

            </tr> 
           
          <?php } }?>
        </tbody>
      </table>  
      <?php $conn->close();  


} 
       ?>






          
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
        <small>V. N. Karazin Kharkiv National University | Voloshin Vitalik</small>
      </div>
    </footer>
    
  </body>
</html>