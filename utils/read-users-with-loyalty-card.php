<?php 

require_once 'connect-db.php';

// $sql = "SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber 
//         INNER JOIN cardtypes ON cardtypes.id = cards.cardTypesId 
//         WHERE clients.card = 1 AND cards.cardTypesId = 1 
//         AND cardtypes.id = 1";

$sql = "SELECT clients.firstName, clients.lastName, clients.birthDate, clients.cardNumber, cardTypes.type
        FROM clients
        JOIN cards on cards.cardNumber = clients.cardNumber
        JOIN cardtypes on cardtypes.id = cards.cardTypesId WHERE cardTypes.type = 'Fidélité'";

try {
    $stmt = $pdo->query($sql);
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat

} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

?>