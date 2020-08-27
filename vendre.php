<?php
require "_include/inc_config.php";

$sql="select * from produits ";
$result=$link->query($sql);
$data=$result->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["add"])) {

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre</title>
</head>

<body>
    <h1>Vendre</h1>
    <form method="POST" action="vendre.php">
    <p>
        <label for="bien">Type de bien</label>
	    <input type="text" id="bien" name="bien" />
    </p>
    <p>
        <label for="caracter">Caractéristique</label>
        <input type="text" id="caracter" name="caracter" />
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

                <th> Type de bien</th>
                <th>Caractéristique</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <?php
            foreach($data as $row) {
                extract($row);
                echo "<tr>";
                
                echo "<td>$pro_bien</td>";
                echo "<td>$pro_caracter</td>";
                echo "<td>$pro_adresse</td>";
                echo "</tr>";
            }
            ?>

    </table>

</body>

</html>