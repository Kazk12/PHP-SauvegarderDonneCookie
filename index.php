<?php

session_start();
$_SESSION['lastname']= "Urek";
$_SESSION['firstname']= "Maz";
$_SESSION['age']= 247;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Stylisé</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

echo "<p>🖥️ User Agent : " .$_SERVER['HTTP_USER_AGENT'] .  "</p>";
 echo "<p>🌐 Adresse IP : " .  $_SERVER["SERVER_ADDR"]  . "</p>";
echo "<p>📡 Nom du Serveur : " . $_SERVER["SERVER_NAME"] . "</p>";


            ?>
<div>
<a href="./users.php">Vers Mon Compte</a>

</div>


    
</body>
</html>