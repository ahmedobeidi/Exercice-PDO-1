<?php 

require_once 'connect-db.php';

$sql = "SELECT * FROM `clients` WHERE LEFT(lastName, 1) = 'M' ORDER BY lastName ASC";

try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

?>