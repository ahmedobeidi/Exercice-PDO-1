<?php 
    require_once '../utils/read-all-users-and-carts.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <?php foreach($users as $user) { ?>
        <div>
            <p> <?= $user['lastName']; ?> </p>
            <p> <?= $user['firstName']; ?> </p>
            <p> <?= $user['birthDate']; ?> </p>
            <p> <?php if ($user['card'] === 1) echo "Oui"; else echo "Non" ?> </p>
            <?php if (!is_null($user['cardNumber'])) echo $user['cardNumber']; ?>
        </div>
        <br><br>
    <?php } ?>
</body>
</html>