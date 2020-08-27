<?php
$tab=[] ;

if (isset($_POST["submit"])) {
	extract($_POST);
	$row=$_POST['firstName'].";".$_POST['lastName'].";".$_POST['adresse'];
	//var_dump($row);
	
	
	if ($ressource = fopen("contacts.txt", "a")) {
		fwrite($ressource,$row . "\n");
		fwrite($ressource,"\n");
		fclose($ressource);
	} else {
		echo "ERROR";
	}
		
}

$ressource = fopen("contacts.txt", "r");

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo</title>
</head>
<body>
	
   
    <table>
        <thead>
			<tr>

				<th>Prenom</th>
				<th>Nom</th>
				<th>Adresse</th>
				</tr>
		</thead>
		<?php
			//$tab=file_get_contents('contacts.txt');
			$tab=file('contacts.txt');
			var_dump($tab);
           //foreach ($tab as $r) {	
                //extract($r); ?>
                <tr>
                    <td><?= $_POST['firstName'] ?></td>
                    <td><?= $_POST['lastName'] ?></td>
                    <td><?= $_POST['adresse'] ?></td>
				</tr>
			<?php// } ?>
    </table>
    
</body>
</html>
