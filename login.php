<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
         if (validate($username, $password)) {
            session_start();
            $_SESSION["email"] = $username;
            header("Location: index.php");
            exit;
        } else {             
            echo "<script>alert('Invalid username or password.')</script>";
        }
    }

    function validate($username, $password) {
      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "test_123";
      $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
      $result = mysqli_query($conn, "Select * from user where username= '$username' and password = '$password'");
      return mysqli_num_rows($result) > 0;
    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <form id="login-form" action="" method="post">
          <h1>Login</h1>
          <input id="username" type="email" name="username" placeholder="username"> 
          <input id="password" type="password" name="password" placeholder="password"> 
          <input type="submit" name="btnlogin" value="login">
        </form>
      </div>
    </div>
  </body>
  <script>
    document.getElementById("login-form").addEventListener("submit", function(e) {
        e.preventDefault();  
 
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
 
        if (username === "" || password === "") {
            alert("Both email and password are required.");
        } else {
 
            this.submit();
        }
    });
  </script>
</html>