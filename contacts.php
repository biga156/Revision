<?php
$contacts = [];
$contacts['firstName'] = ['Prenom1', 'Prenom2', 'Prenom3'];
$contacts['lastName'] = ['Nom1', 'Nom2', 'Nom3'];
$contacts['adresse'] = ['Adresse1', 'Adresse2', 'Adresse3'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>

<body>
    <h1>Contacts</h1>
    <form method="POST" action="contacts.php">
    <p>
        <label for="firstName">Prenom</label>
	    <input type="text" id="firstName" name="firstName" />
    </p>
    <p>
        <label for="lastName">Nom</label>
        <input type="text" id="lastName" name="lastName" />
    </p>
    <p>
        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" />
    </p>
<p>
    <input type="submit" name="add" value="Ajouter" />
    
</p>
</form>

    <table>
        <thead>
            <tr>

                <th> Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <?php
        for($i=0; $i<count($contacts);$i++){
        ?>
        <tr>
            <td><?= $contacts['firstName'][$i] ?></td>
            <td><?= $contacts['lastName'][$i] ?></td>
            <td><?= $contacts['adresse'][$i] ?></td>
        </tr>
        <?php } ?>

    </table>

</body>

</html>