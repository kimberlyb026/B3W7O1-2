<?php
$servername = "localhost";
$username = "games1";
$password = "hallo1234";
$dbname = "spelletjes";

    $conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
$statement = $conn->prepare('SELECT * FROM games WHERE `name` = :inputName');
$statement->execute([":inputName" => urldecode($_GET['name'])]);
$result = $statement->fetchAll();
?>