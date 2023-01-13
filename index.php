<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location: login.php");
}


if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
  session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Web Developer Exam</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div>
      <div class="container">
        <div class="header"></div>
        <div class="flex">
          <div class="block1"></div>
          <div class="block2"></div>
        </div>
        <div class="footer"></div>
      </div>
    </div>
  </body>
</html>

 
