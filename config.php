<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dataware'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>