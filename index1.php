<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=formulaire", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$nom=$_POST["nom"];
$Adresse=$_POST["email"];
$Tel_number=$_POST["telephone"];
$Date_reservation=$_POST["date"];
$Heure_reservation=$_POST["heure"];
$Nombre_de_personnes=$_POST["personnes"];
$motDePasse=$_POST["password"];

                                                                                                                                                                                                                                                                                                                          
$sql = "INSERT INTO clients(nom,Adresse,Tel_number,Date_reservation,Heure_reservation,Nombre_de_personnes,motDePasse) 
VALUES ('$nom','$Adresse','$Tel_number','$Date_reservation','$Heure_reservation','$Nombre_de_personnes','$motDePasse')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>";
}
HEADER('Location:Authentification.html');

?>























/*echo "<br>";
echo $nom;
echo"<br>";
echo $Adresse;
echo"<br>";
echo $Tel_number;
echo"<br>";
echo $Date_reservation;
echo"<br>";
echo $Heure_reservation;
echo"<br>";
echo $Nombre_de_personnes;
echo"<br>";
echo $motDePasse;*/