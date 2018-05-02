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
		<li><a href="doktorantai.php" class="active">Doktorantai</a></li>
		<li><a href="vadovai.php">Vadovai</a></li>
		<li><a href="disertacijos.php">Disertacijos</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		Doktorantai - lentele
		<table class="doktorantu_lentele" align="center">
			<tr>
				<td>Vardas, Pavarde</td>
				<td>Pareigos</td>
				<td>Dirba</td>
				<td>Telefonas</td>
				<td>Elektroninis pastas</td>
				<td>Grupe</td>
			</tr>
		<?php
		$sql = "SELECT * FROM Doktorantai";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><th> " . $row["vardas"]. " " . $row["pavarde"]." "."</th><th>" . $row["tikros_pareigos"]. "</th><th>" . $row["darbo_vieta"]. "</th><th>" . $row["telefonas"]. "</th><th>" . $row["email"]. "</th><th>" . $row["pareigos"]. "</th></tr>";
		    }
		} else {
		    echo "0 results";
		}
		?>

</table>
<?php 
	
?>
	</div>
	<?php $conn->close();?>
</body>
</html>