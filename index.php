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
		<li><a href="index.php" class="active">Pagrindinis puslapis</a></li>
		<li><a href="Grupes.php">Grupes</a></li>
		<li><a href="doktorantai.php">Doktorantai</a></li>
		<li><a href="vadovai.php">Vadovai</a></li>
		<li><a href="disertacijos.php">Disertacijos</a></li>
		</ul>
	</nav>
	</div>
	<div class="content-container">
		

		Doktorantu forma<br>
		<table class="doktorantu_forma" align="center">
			<form action="#" method="post">
			<tr>
				<th>Vardas: </th>
				<th><input type="text" name="vardas"></th>
			</tr>
			<tr>
				<th>Pavarde: </th>
				<th><input type="text" name="pavarde"></th>
			</tr>
			<tr>
				<th>Pareigos:</th>
				<th><input type="text" name="padalinys"></th>
			</tr>
			<tr>
				<th>Pareigos:</th>
				<th><input type="text" name="pareigos"></th>
			</tr>
			<tr>
				<th>Kryptis:</th>
				<th><input type="text" name="kryptis"></th>
			</tr>
			<tr>
				<th>Darbo vieta:</th>
				<th><input type="text" name="darboviete"></th>
			</tr>
			<tr>
				<th>Telefonas:</th>
				<th><input type="text" name="number"></th>
			</tr>
			<tr>
				<th>El. pastas:</th>
				<th><input type="text" name="email"></th>
			</tr>
			
				<th>
					Priskirti grupe: 
				</th>
				<th>
					<select name="grp">
					<?php
						$sql = "SELECT * FROM Grupes";
						$result = $conn->query($sql);
		 
						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						        echo "<option value=".$row['id'].">".$row['name']."</option>";
						    }
						} else {
						    echo "0 results";
						}
					?>
					  </select>
				</th>
			</tr>
			<tr>
				<th>Disertacijos tema: </th>
				<th>
				<select name="thema">
				<?php 
					$sql = "SELECT * FROM Disertacijos";
					$result = $conn->query($sql);?>
					<?php
						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {
						        echo "<option value=".$row['id'].">".$row['tema']."</option>";
						    }
						}
					?>
					  </select>
				</th>
			</tr>
			<tr>
			<tr>
				<th><input class="btn" type="submit" name="dok" value="siusti"></th>
			</tr>
			</form>
			</table>

			Vadovu forma:<br>
			<table class="vadovu_forma" align="center">
				<form action="#" method="post">
				<tr>
					<th>Vardas:</th>
					<th><input type="text" name="name"></th>
				</tr>
				<tr>
					<th>Pavarde:</th>
					<th><input type="text" name="last_name"></th>
				</tr>
				<tr>
					<th>Padalinys:</th>
					<th><input type="text" name="ening"></th>
				</tr>
				<tr>
					<th>Pareigos:</th>
					<th><input type="text" name="skydul"></th>
				</tr>
				<tr>
					<th>Darboviete:</th>
					<th><input type="text" name="work_place"></th>
				</tr>
				<tr>
					<th>Telefonas:</th>
					<th><input type="text" name="phone"></th>
				</tr>
				<tr>
					<th>EL. pastas:</th>
					<th><input type="text" name="email_adress"></th>
				</tr>
				<tr>
					<th>Asmeninis puslapis:</th>
					<th><input type="text" name="url"></th>
				</tr>
				<tr>
					<th><input class="btn" type="submit" name="vdv" value="siusti"></th>
				</tr>
				</form>
			</table>
		
		Disertaciju forma <br>
		<?php
		$sql = "SELECT id, vardas, pavarde, pareigos FROM Vadovai";
		$result = $conn->query($sql);
		
		
		?>
		<table class="disertaciju_forma" align="center">
			<form action="#" method="post">
			<tr>
				<th>Tema:</th>
				<th><input type="text" name="tema"></th>
			</tr>
			<tr>
				<th>
					Priskirti vadovui: 
				</th>
				<th>
					<select name="uzduociu_vadovai">
					<?php 
						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {

						        echo "
						        	<option value=".$row['vardas'].">".$row['vardas']."</option>
						        ";
						    }
						} else {
						    echo "0 results";
						}
					?>
					  </select>
				</th>
			</tr>
			<tr>
				<th>Studiju laikas nuo:</th>
				<th><input type="date" name="studies_time_from"></th>
			</tr>
			<tr>
				<th>Studiju laikas iki:</th>
				<th><input type="date" name="studies_time_to"></th>
			</tr>
			<tr>
				<th>Disertacijos tikslas: </th>
				<th><input type="text" name="tikslas"></th>
			</tr>
			<tr>
				<th>Uzdaviniai: </th>
				<th><input type="text" name="uzdaviniai"></th>
			</tr>
			<tr>
				<th><input class="btn" type="submit" name="dis" value="siusti"></th>
			</tr>
			</form>
		</table>

		Grupiu forma
		<?php
		$sql = "SELECT id, vardas, pavarde, pareigos FROM Vadovai";
		$result = $conn->query($sql);
		
		
		?>
		<table class="disertaciju_forma" align="center">
			<form action="#" method="post">
			<tr>
				<th>Grupes pavadinimas: </th>
				<th><input type="text" name="name"></th>
			</tr>
			<tr>
				<th>Adresas:</th>
				<th><input type="text" name="adress"></th>
			</tr>
			<tr>
				<th>Telefonas:</th>
				<th><input type="text" name="phone"></th>
			</tr>
			<tr>
				<th>Elektroninis pastas:</th>
				<th><input type="text" name="email"></th>
			</tr>
			<tr>
				<th>
					Priskirti vadovui: 
				</th>
				<th>
					<select name="vadovai">
					<?php 
						if ($result->num_rows > 0) {
						    while($row = $result->fetch_assoc()) {

						        echo "
						        	<option value=".$row['vardas'].">".$row['vardas']."</option>
						        ";
						    }
						} else {
						    echo "0 results";
						}
					?>
					  </select>
				</th>
			</tr>
			<tr>
				<th><input class="btn" type="submit" name="grp" value="siusti"></th>
			</tr>
			</form>
		</table>





	</div>
	<?php include 'input_data.php';?>
	<?php $conn->close();?>
</body>
</html>