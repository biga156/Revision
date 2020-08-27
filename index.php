<?php

if (isset($_POST["submit"])) {
    header("location: contacts.php");
}  else if (isset($_POST["vendre"])) {
    header("location: vendre.php");
}else if (isset($_POST["acheter"])) {
    header("location: acheter.php");
}else if (isset($_POST["louer"])) {
    header("location: louer.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Index</h1>
    <form method="POST" action="index.php">
   
    <p>
        <input type="submit" name="submit" value="Contacts clients"  />    
        <input type="submit" name="vendre" value="Vendre" />
        <input type="submit" name="acheter" value="Acheter" />
        <input type="submit" name="louer" value="Louer" />
    </p>
</form>
   
    
</body>
</html>
