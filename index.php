<?php 
require 'db.php';

$db = new db;

$db->connect();

$zapytanie = $db->query('SELECT * FROM `city`');

var_dump($zapytanie);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL</title>
</head>
<body>
    test
</body>
</html>