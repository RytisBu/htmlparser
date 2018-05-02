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
		<li><a href="Grupes.php">Grupes</a></li>
		<li><a href="doktorantai.php">Doktorantai</a></li>
		<li><a href="vadovai.php" class="active">Vadovai</a></li>
		<li><a href="disertacijos.php">Disertacijos</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		Vadovu lentele.<br>
		<table class="doktorantu_lentele" align="center">
			<tr>
				<td>Vardas</td>
				<td>Pavarde</td>
				<td>Pareigos</td>
				<td>Kuruojama grupe</td>
			</tr>
		<?php
		$sql = "SELECT * FROM Vadovai CROSS JOIN Grupes where vardas = vadovas";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {

		    	

		        echo "<tr><th> " . $row["vardas"]. "</th><th>" . $row["pavarde"]. "</th><th>" . $row["pareigos"]. "</th><th>" . $row["name"]. "</th></tr>";
		    }
		}

		
		?>
</table>
	</div>
	<?php $conn->close();?>
</body>
</html>