<?php
require "_include/inc_config.php";

$sql="select * from acheter ";
$result=$link->query($sql);
$data=$result->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["add"])) {
    extract($_POST);  
    if ($ach_id==0) {
        $sql = "insert into acheter values (null,:ach_numero,:ach_type, :ach_caracter, :ach_adresse)";
        $statement = $link->prepare($sql);
        $statement->bindParam(":ach_numero",$numero,PDO::PARAM_STR);
        $statement->bindParam(":ach_type",$type,PDO::PARAM_STR);
        $statement->bindParam(":ach_caracter",$caracter,PDO::PARAM_STR);
        $statement->bindParam(":ach_adresse",$adresse,PDO::PARAM_STR);
        $statement->execute(); 
    } else {
       //update
    }      

    header("location:acheter.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter</title>
    <a href='index.php'>Retour a l'accueil </a>
</head>
<body>
    <h1>Acheter</h1>
    <form method="POST" action="acheter.php">
    <p>
        <label for="numero">Numéro de l’article</label>
	    <input type="number" id="numero" name="numero" />
    </p>
    <p>
        <label for="type">Type de l’article</label>
	    <input type="text" id="type" name="type" />
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
				<th> Numéro de l’article</th>
                <th>Type de l’article</th>
                <th>Caractéristique</th>
				<th>Adresse</th>
				</tr>
		</thead>
        <?php
            foreach($data as $row) {
                extract($row);
                echo "<tr>";
                
                echo "<td>$ach_id</td>";
                echo "<td>$ach_numero</td>";
                echo "<td>$ach_type</td>";
                echo "<td>$ach_caracter</td>";
                echo "<td>$ach_adresse</td>";
                echo "<td><a href='acheter_delete.php?id=$ach_id'>Supprimer</a></td>";
                echo "</tr>";
            }
            ?>

    </table>

</body>
</html>
