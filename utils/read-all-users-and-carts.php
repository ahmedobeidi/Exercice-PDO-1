<?php 
    require_once '../utils/connect-db.php';

    $sql = "SELECT clients.firstName, clients.lastName, clients.birthDate, clients.card, clients.cardNumber, 
            cardtypes.type 
            FROM `clients` 
            LEFT JOIN cards ON cards.cardNumber = clients.cardNumber 
            LEFT JOIN cardtypes ON cardtypes.id = cards.cardTypesId;";

    try {
        $stmt = $pdo->query($sql);
        $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $error) {
        echo $error;
    }
?>