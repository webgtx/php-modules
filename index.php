<!DOCTYPE html>
<html lang="en">

<head>
  <title>Main</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="css/style.css" rel="stylesheet"> -->
</head>
<body>

  <?php include 'modules/header.php' ?>
  <form action="modules/check_post.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="Login">
  </form>

  <main>
    <h1>Home page</h1>
  </main>

  <footer>Copyright &copy; 2049</footer>
</body>
</html>

<?php
  print_r($_GET);

  include 'modules/func.php';
  echo concate(gen_str('hsau2193ksuf3u0sad'));

?>
