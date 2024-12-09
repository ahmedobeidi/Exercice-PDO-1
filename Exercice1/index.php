<?php 

  require_once './utils/read-all-users.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecercice 1</title>
    <style>
        div {
            color: white; 
            width: 150px;
            display: flex;
            flex-direction: column;
            background-color: brown;
            text-align: center;
        }
    </style>
</head>
<body>
     
    <?php foreach($users as $user) { ?>
        <div>
            <P><?= $user['lastName'] ?></P>
            <P><?= $user['firstName'] ?></P>
            <P><?= $user['birthDate'] ?></P>
            <P><?= $user['card'] ?></P>
            <P><?= $user['cardNumber'] ?></P>
        </div>
        <br><br>  
        <?php            
        }
    ?>
</body>
</html>