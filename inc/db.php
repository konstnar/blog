<?php


function db_connect() {

    try {
        $pdo = new PDO('mysql:host=localhost; dbname=blog', 'blog', 'blogpass');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    } catch (PDOException $e) {
        $errorMessage = '<p>При подключении к базе данным произошла ошибка.</p>' . '<p>' . $e->getMessage() . '</p>';
        include __DIR__ . '/../views/debug.html.php';
        exit();
    }

    return $pdo;
}

