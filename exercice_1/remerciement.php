<?php

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];

echo 'Merci ' . $prenom . '  ' .$nom . 'de nous avoir contacté à propos de ' . $sujet . '.' . "\n".'Un de nos conseillers vous contactera soit à l’adresse' . $mail . 'ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande : ' . $message;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciement</title>
</head>
<body>
    <p></p>
</body>
</html>