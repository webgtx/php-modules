<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
</head>
<body>
  	<?php include 'modules/header.php' ?>
	<?php
	  	include 'modules/simple_def.php';
		echo '<ul>';
		showFiles('modules');
		echo '</ul>';
	?>
</body>
</html>