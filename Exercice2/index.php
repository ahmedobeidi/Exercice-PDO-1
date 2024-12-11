<?php 

  require_once '../utils/read-all-shows.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Tous les types de spectacles possibles</h1>

    <ul> 
        <?php foreach($showsTypes as $showType) { ?>
            <li><?= $showType['type']; ?></li>
        <?php } ?>
    </ul>
</body>
</html>