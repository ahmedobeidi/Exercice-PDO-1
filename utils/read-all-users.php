<?php 

//  ./connect-db.php searches at the root for connect-db, either do ./utils/connect-db or just connect.db since it's in the same folder
require_once 'connect-db.php';  

// $sql = "SELECT * FROM `clients`";
$sql = "SELECT clients.firstName, clients.lastName
        From clients";

try {
    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo $error->getMessage();
}