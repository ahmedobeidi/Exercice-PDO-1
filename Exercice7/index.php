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
    <h1>Afficher tous les clients sous un format particulier</h1>

    <?php
    foreach ($clients as $client) {
    ?>
        <hr>
        <!-- EXEMPLE -->
        <article>
            <p><span style="font-weight:bold;">Nom :</span> <?= $client['lastName'] ?></p>

            <p><span style="font-weight:bold;">Prénom :</span> <?= $client['firstName'] ?></p>

            <p><span style="font-weight:bold;">Date de naissance :</span> <?= $client['birthDate'] ?></p>

            <p>
                <span style="font-weight:bold;">Carte de fidélité :</span> 
                <?php echo $client['type'] === 'Fidélité' ? 'Oui' : 'Non'; ?> 
            </p>


            <?php
                if ($client['type'] === 'Fidélité') {
                    echo "<p><span style='font-weight:bold;'>Numéro de carte :</span> {$client['cardNumber']}</p>";
                }
            ?>
            
        </article>

        <hr>

    <?php } ?>

</body>
</html>