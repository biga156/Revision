<?php


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
                     ?><td><?= $tab[$i] ?>
                     
                    <?php 
                    $counter++;
                    if($counter>3){?>
                    </td> 
                    <?php
                    $counter=1; } ?>
                    </tr>
                    
            <?php } ?>
            <br>
    </table>
    
</body>
</html>
