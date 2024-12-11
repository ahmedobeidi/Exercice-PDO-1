<?php 
    require_once '../utils/read-users-with-loyalty-card.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Les clients qui ont une carte de fidélité</h1>

    <ul>
        <?php foreach($clients as $client) { ?>
            <li>Prénom : <?= $client['firstName']; ?> | Nom : <?= $client['lastName']; ?> | Date de naissance : <?= $client['birthDate']; ?> | Numéro de carte : <?= $client['cardNumber']; ?> | Type de carte : <?= $client['type']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>