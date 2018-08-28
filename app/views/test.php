<?php

$database = new Database();
//$statement = $database->connection->prepare("select * from exercise");

try {
    $statement = $database->connection->prepare(
        "insert into exercise values(default, '{$_POST['exercise']}', '{$_POST['length']}', '{$_POST['date']}')"
    );

    $statement->execute();
    echo 'Added exercise';
} catch (Exception $exception) {
    die($exception->getMessage());
}
//var_dump($statement->fetchAll());
//var_dump($_POST);