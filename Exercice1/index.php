<?php 

  require_once '../utils/read-all-users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecercice 1</title>
</head>
<body>
    <h1>Tous les clients</h1>

    <ul>
        <?php foreach($clients as $client) { ?>
            <li>Prénom : <?= $client['firstName'] ?> | Nom : <?= $client['lastName'] ?></li>
        <?php }?>
    </ul>
    
</body>
</html>