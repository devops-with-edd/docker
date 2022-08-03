<?php
$host = "mysql-server";
$user = "root";
$pass = "secret";
$db = "app1";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Bien HEcho EDD Sigue asi!";
} catch(PDOException $e) {
    echo "ooops! algo salio mal: " . $e->getMessage();
}
?>
