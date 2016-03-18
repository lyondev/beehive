<?php
    $username = "Stuff";
    $password = "Things";
    $hostname = "localhost";
    try {
        $db = new PDO("mysql:host=$hostname; dbname=lyondev_bee_database", $username, $password);
        echo 'Connected to database';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>
