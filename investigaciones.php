<html>
<head>
	<?php
		$nombre_user = $_COOKIE["colab_userid"];
	?>
	<meta charset="UTF-8">
	<title>Laboratorios</title>
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
	<h1> Laboratorios </h1>
	<?php 
	echo "<div>Bienvenido ".$nombre_user."</div>";
	?>

</body>
</html>