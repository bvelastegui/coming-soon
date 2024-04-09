<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['email'])) {
    $pass = 'Hf0R^lc;BC#';
    $user = 'u423453798_cadys';
    $MYSQL_DUPLICATE_CODES=array(1062,23000);

    try {
        $db = new PDO(
            dsn: 'mysql:host=localhost;dbname=u423453798_candys',
            username: $user,
            password: $pass,
            options: [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        );

        $ps = $db->prepare('INSERT INTO interested_users (email) VALUES (?)');

        $ps->execute([$_POST['email']]);
        $_SESSION['success'] = true;
    } catch (PDOException $e) {
        if (in_array($e->getCode(), $MYSQL_DUPLICATE_CODES)) {
            $_SESSION['success'] = false;
        } else {
            $_SESSION['db_error'] = $e->getMessage();
        }
    }
}

header('Location: /');
