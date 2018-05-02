<?php
if(isset($_POST['dok'])){

	if(!empty($_POST['vardas']) && !empty($_POST['pavarde']) && !empty($_POST['pareigos']) && !empty($_POST['kryptis']) && !empty($_POST['darboviete']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['thema'])){
		$temaid;
		$groupid;

		$sql = "SELECT * FROM Disertacijos WHERE ".$_POST['thema']." = id";
		
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$temaid = $row['tema'];
				}
			}
		$sql = "SELECT * FROM Grupes WHERE ".$_POST['grp']." = id'";
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$groupid = $row['name'];
					echo $row['id']." ".$groupid;
					
				}
			}	
		$sql = "INSERT INTO Doktorantai (vardas, pavarde, pareigos, kryptis, darbo_vieta, telefonas, email, tema, tikros_pareigos) VALUES ('".$_POST["vardas"]."','".$_POST["pavarde"]."','".$groupid."','".$_POST["kryptis"]."','".$_POST["darboviete"]."','".$_POST["number"]."','".$_POST["email"]."','".$temaid."','".$_POST['pareigos']."')";
		$conn->query($sql) or die(mysql_error("Neveikia!"));
	}
}
if(isset($_POST['vdv'])){
	mysql_query("SET name 'utf8'");
	if(!empty($_POST['name']) && !empty($_POST['last_name']) && !empty($_POST['ening']) && !empty($_POST['skydul']) && !empty($_POST['work_place']) && !empty($_POST['phone']) && !empty($_POST['email_adress'])){
		$sql = "INSERT INTO Vadovai (vardas, pavarde, padalinys, pareigos, darbo_vieta, telefonas, email, asmeninis_puslapis) VALUES ('".$_POST["name"]."','".$_POST["last_name"]."','".$_POST["ening"]."','".$_POST["skydul"]."','".$_POST["work_place"]."','".$_POST["phone"]."','".$_POST["email_adress"]."','".$_POST["url"]."')";
		$conn->query($sql);
	}
}else if(isset($_POST['dis'])){

	if(!empty($_POST['tema']) && !empty($_POST['uzduociu_vadovai']) && !empty($_POST['uzdaviniai'])){
		mysql_query("SET name 'utf8'");
		$sql = "INSERT INTO Disertacijos (tema, vadovo_vardas, studijos_nuo, studijos_iki, tikslas, uzdaviniai) VALUES ('".$_POST["tema"]."','".$_POST['uzduociu_vadovai']."','".$_POST["studies_time_from"]."','".$_POST["studies_time_to"]."','".$_POST["tikslas"]."','".$_POST["uzdaviniai"]."')";
		$conn->query($sql);
	}
}else if(isset($_POST['grp'])){

	if(!empty($_POST['name']) && !empty($_POST['adress']) && !empty($_POST['vadovai']) && !empty($_POST['phone']) && !empty($_POST['email'])){
		mysql_query("SET name 'utf8'");
		$sql = "INSERT INTO Grupes (adresas, vadovas, telefonas, email, name) VALUES ('".$_POST["adress"]."','".$_POST['vadovai']."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["name"]."')";
		$conn->query($sql);
	}
}
		/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully".$_POST['uzduociu_vadovai'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
	}
}*/

?>