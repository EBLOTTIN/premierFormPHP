<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
</head>
<body>
    <header>
        <h1>Mon formulaire en PHP</h1>
    </header>
        <form action="/remerciement.php" method="post">
            <label>Prénom</label><br/>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom"><br/>
            <label>Nom</label><br/>
            <input type="text" id="nom" name="nom" placeholder="Votre nom"><br/>
            <label>Mail</label><br/>
            <input type="mail" id="mail" name="mail" placeholder="Votre adresse mail"><br/>
            <label>Téléphone</label><br/>
            <input type="text" id="phone" name="phone" placeholder="Votre numéro de téléphone"><br/>
            <label>Sujet</label><br/>
            <select name="sujet" id="sujet">
            <option value="">--Choisissez un sujet--</option>
            <option value="renseignement">Renseignement</option>
            <option value="idea">Une idée à mettre en place</option>
        </select><br/>
            <label>Message</label><br/>
            <input type="textarea" id="message" name="message" placeholder="Votre message"><br/>
            <button type="submit">Envoyer votre message</button>
        </form><br/>
</body>
</html>