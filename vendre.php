<?php
require "_include/inc_config.php";

$sql="select * from produits ";
$result=$link->query($sql);
$data=$result->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["add"])) {
    extract($_POST);  
    if ($pro_id==0) {
        $sql = "insert into produits values (null,:pro_bien, :pro_caracter, :pro_adresse)";
        $statement = $link->prepare($sql);
        $statement->bindParam(":pro_bien",$bien,PDO::PARAM_STR);
        $statement->bindParam(":pro_caracter",$caracter,PDO::PARAM_STR);
        $statement->bindParam(":pro_adresse",$adresse,PDO::PARAM_STR);
        $statement->execute(); 
    } else {
       //update
    }      

    header("location:vendre.php");
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre</title>
    <a href='index.php'>Retour a l'accueil </a>
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
                <th>Id</th>
                <th> Type de bien</th>
                <th>Caractéristique</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <?php
            foreach($data as $row) {
                extract($row);
                echo "<tr>";
                
                echo "<td>$pro_id</td>";
                echo "<td>$pro_bien</td>";
                echo "<td>$pro_caracter</td>";
                echo "<td>$pro_adresse</td>";
                echo "<td><a href='vendre_delete.php?id=$pro_id'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>

    </table>

</body>

</html>