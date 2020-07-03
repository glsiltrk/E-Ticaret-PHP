<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=eticaret", "root", "");
     //echo"BASARILI";
} catch ( PDOException $e ){
     print $e->getMessage();
     exit;
}

$Ayar-$db->query("SELECT * FROM ayar")->fetch();

print_r($Ayar);
?>