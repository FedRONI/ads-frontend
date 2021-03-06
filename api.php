<?php

$pdo = new PDO('mysql:host=localhost;dbname=test_bd', 'root', 'root');

$prepare = $pdo -> prepare('INSERT INTO test (id) values (:id)');
$prepare -> bindValue(':id', 1434123);
$prepare -> execute();


if (isset($_GET['add'])) {
    echo 'Добавить объявление';
}

else if (isset($_GET['id'])) {
    echo 'Показать объявление';
}


else if (isset($_GET['all'])) {
    echo 'Показать все объявления';
}