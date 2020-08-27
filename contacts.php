<?php
require "_include/inc_config.php";

$sql="select * from contacts ";
$result=$link->query($sql);
$data=$result->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["add"])) {

}

if (isset($_POST["add"])) {
    extract($_POST);  
    if ($con_id==0) {
        $sql = "insert into contacts values (null,:con_prenom, :con_nom, :con_adresse)";
        $statement = $link->prepare($sql);
        $statement->bindParam(":con_prenom",$prenom,PDO::PARAM_STR);
        $statement->bindParam(":con_nom",$nom,PDO::PARAM_STR);
        $statement->bindParam(":con_adresse",$adresse,PDO::PARAM_STR);
        $statement->execute(); 
    } else {
        //editer
        $sql = "update contacts set con_prenomnom=:con_prenom where con_id=:mo_id";
        $statement = $link->prepare($sql);
        $statement->bindParam(":con_id",$con_id,PDO::PARAM_INT);
        $statement->execute(); 
    }      

    header("location:contacts.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <a href='index.php'>Retour a l'accueil </a>
</head>

<body>
    <h1>Contacts</h1>
    <form method="POST" action="contacts.php">
    <p>
        <label for="prenom">Prenom</label>
	    <input type="text" id="prenom" name="prenom" />
    </p>
    <p>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" />
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
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <?php
            foreach($data as $row) {
                extract($row);
                echo "<tr>";
                echo "<td>$con_id</td>";
                echo "<td>$con_prenom</td>";
                echo "<td>$con_nom</td>";
                echo "<td>$con_adresse</td>";
                 echo "<td><a href='contact_delete.php?id=$con_id'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>

    </table>

</body>

</html>