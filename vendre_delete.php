<?php
require "_include/inc_config.php";
extract($_GET);
$sql="delete from produits where pro_id=:id";
try {
    $statement = $link->prepare($sql);
    $statement->execute([":id"=>$id]); 
} catch (PDOException $e) {
    die($e->getMessage());
}
header("location:vendre.php");