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
    <?php foreach($shows as $show) { ?>
        <p> <?= $show['title']; ?> </p>
    <?php } ?>
</body>
</html>