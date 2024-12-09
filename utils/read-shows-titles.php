<?php 
    require_once 'connect-db.php';

    $sql = "SELECT * FROM `shows` ORDER BY title ASC";

    try {
        $stmt = $pdo->query($sql);
        $shows = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    } catch (PDOException $error) {
        echo "{$error->getMessage()}";
    }   
?>