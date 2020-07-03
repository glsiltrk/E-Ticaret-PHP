<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=eticaret;charset=utf8", "root", "root");
     //echo"BASARILI";
} catch ( PDOException $e ){
     print $e->getMessage();
     exit;
}
$Ayar=$db ->query("SELECT * FROM ayar")->fetch();

?>