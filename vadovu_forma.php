</!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Html parser</title>
</head>
<body>
	<div class="nav-bar">
	<nav>
		<ul>
		<li><a href="index.php">Pagrindinis puslapis</a></li>
		<li><a href="doktorantu_forma.php">Doktorantai_forma</a></li>
		<li><a href="doktorantai.php">Doktorantai</a></li>
		<li><a href="vadovai.php">Vadovai</a></li>
		<li><a href="vadovu_forma.php" class="active">Vadovu forma</a></li>
		<li><a href="grupes.php">Grupes</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		Vadovu forma:<br>
		<form action="doktorantai.php">
			Vardas: <input type="text" name="vardas"><br>
			Pavarde: <input type="text" name="pavarde"><br>
			Pareigos: <input type="text" name="pareigos"><br>
			<input type="submit" name="siusti" value="siusti">
		</form>
	</div>
</body>
</html>