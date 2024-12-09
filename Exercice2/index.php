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
    <?php foreach($shows as $show) { ?>
        <div>
            <P><?= $show['title'] ?></P>
            <P><?= $show['performer'] ?></P>
            <P><?= $show['date'] ?></P>
            <P><?= $show['showTypesId'] ?></P>
            <P><?= $show['firstGenresId'] ?></P>
            <P><?= $show['secondGenreId'] ?></P>
            <P><?= $show['duration'] ?></P>
            <P><?= $show['startTime'] ?></P>
        </div>
        <br><br>  
        <?php            
        }
    ?>
</body>
</html>