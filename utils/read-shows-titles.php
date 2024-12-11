<?php 
    require_once 'connect-db.php';

    $sql = "SELECT shows.title, shows.performer, shows.date, shows.startTime
            FROM shows
            ORDER BY shows.title ASC";

    try {
        $stmt = $pdo->query($sql);
        $shows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $error) {
        echo "{$error->getMessage()}";
    }   
?>