<?php
$visitors = file_get_contents('visitors.txt');
$visitors = $visitors+1;

file_put_contents('visitors.txt',$visitors);

$content = file_get_contents('visitors.txt');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Death Note</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="images/cover.jpg" rel="icon">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Pacifico" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- nav menu -->
  <nav>
    <ul>
      <li><a href="index.php"><img class="onion" src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="if you find this you are good"></a></li>

    </ul>
  </nav>
  <!-- page header -->

  <body2>
    <a href="features.php">
      <div class="book">
        <div class="back"></div>
        <div class="page6"></div>
        <div class="page5"></div>
        <div class="page4"></div>
        <div class="page3"></div>
        <div class="page2"></div>
        <div class="page1"></div>
        <div class="front" style="background: url(https://i.pinimg.com/474x/b3/5c/92/b35c92a18e952341c2c3c8a8c449a939.jpg);"></div>
      </div>
    </a>
  </body2>
</body>
</html>