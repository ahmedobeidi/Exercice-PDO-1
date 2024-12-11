<?php 

require_once 'connect-db.php';  

$sql = "SELECT showtypes.type
        FROM showtypes";

try {
    $stmt = $pdo->query($sql);
    $showsTypes = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}