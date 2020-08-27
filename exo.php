<?php
$tab=[] ;

if (isset($_POST["submit"])) {
	//extract($_POST);
	//$row=$_POST['firstName'].";".$_POST['lastName'].";".$_POST['adresse'];
	//var_dump($row);
	
	
	if ($ressource = fopen("contacts2.txt", "a")) {
        fwrite($ressource,$_POST['firstName'] . "\n");
        fwrite($ressource,$_POST['lastName'] . "\n");
        fwrite($ressource,$_POST['adresse'] . "\n");
		fwrite($ressource,"\n");
		fclose($ressource);
	} else {
		echo "ERROR";
	}
		
}

$ressource = fopen("contacts2.txt", "r");

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
			
			$tab=file('contacts2.txt');
            //var_dump($tab);
            
            /*$counter = 1;
	        while ($line = fgets($ressource)) {
		        if ($counter == 1)
			        $firstName = $line;
		        else if ($counter == 2)
                    $lastName = $line;
                else if ($counter == 3)
			        $adress = $line;
		        else {
		
		} 

		$counter++;
		if ($counter == 4)
			$counter = 1;
	}*/

           //foreach ($tab as $r) {	
                //extract($r); ?>
                <tr>
                    <?php
                    $counter=1;
                    for($i=0; $i<count($tab); $i++){
                     ?><td><?= $tab[$i] ?></td>
                    <?php  if($counter>3){?>
                    </tr> 
                    <tr><?php
                    $counter=1; } ?>
                    </tr>
			<?php } ?>
    </table>
    
</body>
</html>
