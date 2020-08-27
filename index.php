<?php
$tab=[] ;

if (isset($_POST["submit"])) {
		
	
	if ($ressource = fopen("contacts2.txt", "a")) {
        fwrite($ressource,$_POST['firstName'] . "\n");
        fwrite($ressource,$_POST['lastName'] . "\n");
        fwrite($ressource,$_POST['adresse'] . "\n");
		fwrite($ressource,"\n");
        fclose($ressource);
        header("location: contacts.php");
	} else {
		echo "ERROR";
	}
	
  

}  else if (isset($_POST["vendre"])) {
    header("location: vendre.php");
}else if (isset($_POST["acheter"])) {
    header("location: acheter.php");
}else if (isset($_POST["louer"])) {
    header("location: louer.php");
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
    <form method="POST" action="exo.php">
   
    <p>
        <input type="submit" name="submit" value="Contacts clients"  />    
        <input type="submit" name="vendre" value="Vendre" />
        <input type="submit" name="acheter" value="Acheter" />
        <input type="submit" name="louer" value="Louer" />
    </p>
</form>
   
    
</body>
</html>
