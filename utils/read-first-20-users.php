<?php 

require_once 'connect-db.php';

$sql = "SELECT * FROM `clients` ORDER BY id ASC LIMIT 20";

try {
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}
?>