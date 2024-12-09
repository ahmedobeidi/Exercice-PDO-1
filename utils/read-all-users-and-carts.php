<?php 
    require_once '../utils/connect-db.php';

    $sql = "SELECT * FROM `clients`";

    try {
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $error) {
        echo $error;
    }
?>