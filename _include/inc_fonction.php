<?php 
function requeteSQL($link,$sql) {
	$result = mysqli_query($link, $sql);
	if (!$result) {
		if (MODE_PROD) {
			echo "Désolé une erreur s'est produite";
		} else {
        	echo "<p>$sql</p>";
			echo mysqli_error($link);
		}
        exit;
	}	
	return $result;
}
?>

