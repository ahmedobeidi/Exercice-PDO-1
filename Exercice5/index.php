<?php 

    require_once '../utils/users-starts-with-M.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Clients dont le nom commence par la lettre "M" par ordre alphabétique</h1>

    <?php foreach($users as $user) { ?>
        <div>
            <P><span style="font-weight: bold;">Prénom : </span> <?= $user['firstName'] ?></P>
            <P><span style="font-weight: bold;">Nom : </span> <?= $user['lastName'] ?></P>
        </div>
        <hr>  
    <?php }?>
</body>
</html>