<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=eticaret", "root", "");
     echo"BASARILI";
} catch ( PDOException $e ){
     print $e->getMessage();
     exit;
}
?>