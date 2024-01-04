<?php:/*
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
echo'<br>';
$nom=$_POST["Login"];
$motDePasse=$_POST["password"];
echo $nom;
echo'<br>';
echo $motDePasse;

$sql = "SELECT id, nom, motDePasse FROM clients WHERE nom='$nom',motDePasse='$password'";
$conn->query($sql);

if ($conn->query($sql)===TRUE) {
    echo "<br> yes";

} else {
  echo "<br> mot de passe incorrect";
}*/
?>