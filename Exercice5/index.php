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
    <?php foreach($users as $user) { ?>
        <div>
            <P>Nom: <?= $user['lastName'] ?> </P>
            <P>Prénom: <?= $user['firstName'] ?> </P>
        </div>
        <br><br>  
    <?php }?>
</body>
</html>