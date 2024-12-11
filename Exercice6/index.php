<?php 
    require_once '../utils/read-shows-titles.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
    <h1>Titre de tous les spectacles par ordre alphabétique ainsi que l'artiste, la date et l'heure.</h1>

    <ul>
        <?php foreach($shows as $show) { ?>
            <li><?= $show['title']; ?> par <?= $show['performer']; ?>, Le <?= $show['date']; ?> à <?= $show['startTime'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>