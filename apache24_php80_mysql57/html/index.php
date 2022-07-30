<?php

try {
    $pdo = new PDO(
        'mysql:dbname=test;host=mysql',
        'user',
        'userpass'
    );

    $stmt = $pdo->query('SELECT NOW() AS now;');
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<p>" . $data['now'] . "</p>\n";
} catch (PDOException $e) {
    exit($e->getMessage());
}

$pdo = null;
