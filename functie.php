<?php

function openDatabaseConnection(){

    $servername = "localhost";
    $username = "games1";
    $password = "hallo1234";
    $dbname = "spelletjes";

        $conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
        return $conn;
}

function getMembers(){
    $conn = openDataBaseConnection();
$statement = $conn->prepare('SELECT * FROM games WHERE `name` = :inputName');
$statement->execute([":inputName" => urldecode($_GET['name'])]);

return  $statement->fetchAll();
}


function getAllMembers(){
    $conn = openDataBaseConnection();
    $stnt=$conn->prepare("SELECT id, name,image From games");
    $stnt ->execute();
    
    return $stnt ->fetchAll();
    }

