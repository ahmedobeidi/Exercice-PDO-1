<?php 

//  ./connect-db.php searches at the root for connect-db, either do ./utils/connect-db or just connect.db since it's in the same folder
require_once './utils/connect-db.php';  

$sql = "SELECT * FROM `clients`";

try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}