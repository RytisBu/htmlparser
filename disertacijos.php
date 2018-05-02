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
		<li><a href="vadovai.php">Vadovai</a></li>
		<li><a href="disertacijos.php" class="active">Disertacijos</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		Disertacijos temos
		<table class="doktorantu_lentele" align="center">
			<tr>
				<td>Tema</td>
				<td>Vadovas</td>
				<td>Studiju laikas</td>
				<td>Tikslas</td>
				<td>Uzdaviniai</td>
			</tr>
		<?php
		$sql = "SELECT * FROM Disertacijos";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><th> " . $row["tema"]. "</th><th>" . $row["vadovo_vardas"]."</th><th>" . $row["studijos_nuo"]." - ". $row["studijos_iki"]. "</th><th>" . $row["tikslas"]. "</th><th>" . $row["uzdaviniai"]. "</th></tr>";
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