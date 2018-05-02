</!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Html parser</title>
</head>
<body>
	<?php include 'connect.php';?>
	<div class="nav-bar">
	<nav>
		<ul>
		<li><a href="index.php">Pagrindinis puslapis</a></li>
		<li><a href="Grupes.php" class="active">Grupes</a></li>
		<li><a href="doktorantai.php">Doktorantai</a></li>
		<li><a href="vadovai.php">Vadovai</a></li>
		<li><a href="disertacijos.php">Disertacijos</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		Grupiu lentele
	<table class="doktorantu_lentele" align="center">
			<tr>
				<td>Grupes pavadinimas</td>
				<td>Adresas</td>
				<td>Vadovas</td>
				<td>Telefonas</td>
				<td>Elektroninis pastas</td>
			</tr>
	<?php
		$sql = "SELECT * FROM Grupes";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><th> " . $row['name']."</th> <th>" . $row["adresas"]." "."</th><th>" . $row["vadovas"]. "</th><th>" . $row["telefonas"]. "</th><th>" . $row["email"]. "</th></tr>";
		    }
		} else {
		    echo "0 results";
		}
		?>
	</table>
</div>
	<?php $conn->close();?>
</body>
</html>