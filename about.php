<!DOCTYPE html>
<html lang="en">

<head>
  <title>About</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="css/style.css" rel="stylesheet"> -->
</head>
<body>
	
   <?php include 'modules/header.php' ?>

  <main>
  	<h1>About us</h1>

  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  	<hr>

  	<ul>
  		<li>Simple</li>
  		<li>Fast</li>	
  		<li>Secure</li>
  	</ul>
  </main>

  <footer>Copyright &copy; 2049</footer>
</body>
</html>

<?php
  include 'modules/simple_def.php';

  $chars = ['a', 'd', 'x', 'z', 'c', 'w'];
  $arr = array();
  for ($i = 0; $i <= 20; $i++) {
    $arr[] = $chars[mt_rand(1, 5)];
  }
 
?>
