<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="css2.css">
    <style>
      body{
        background-color:;
      }


 
      </style>
</head>
<body style=" background-color:#FFEFD5;    ">
<form action="index1.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" >
        <br>
      
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" >
        <br>
      
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" >
        <br>
      
        <label for="date">Date de réservation :</label>
        <input type="date" id="date" name="date" >
        <br>
      
        <label for="heure">Heure de réservation :</label>
        <input type="time" id="heure" name="heure" >
        <br>
      
        <label for="personnes">Nombre de personnes :</label>
        <input type="number" id="personnes" name="personnes" min="1" >
        <br>
      
        <label for="password">Mot de passe </label>
        <input type="password" id="password" name="password" min="1" >
        <br>
       <br><br>
        <input type="submit" value="Envoyer">
      </form>

</body>
</html>