<?php 
global $pdo;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=central","root", "");
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>

