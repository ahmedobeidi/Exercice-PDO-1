<?php 

require_once 'connect-db.php';

$sql = "SELECT clients.firstName, clients.lastName
        FROM clients
        LIMIT 20";

try {
    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}
?>