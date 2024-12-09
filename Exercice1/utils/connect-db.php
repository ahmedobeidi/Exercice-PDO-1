<?php
try {

    $host = "localhost";
    $dbname = "colyseum";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);


} catch (PDOException $error) {
    echo "Erreur de connexion : " . $error->getMessage();
}

?>