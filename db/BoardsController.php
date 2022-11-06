<?php

$link = 'mysql:host=localhost;dbname=kanbanbd';
$user = 'root';
$pass = 'root';

try {
    $pdo  = new PDO($link,$user,$pass);
    echo 'Connected 🔌';

    foreach($pdo->query('SELECT * from `boards`') as $fila){
        print_r($fila);
    };

} catch (PDOException $e) {
       print "¡Error!: " . $e->getMessage() . "<br/>";
       die();
    }