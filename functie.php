<?php
    function openDatabaseConnection(){
        $servername = "localhost";
        $username = "games";
        $password = "hallokever";
        $dbname = "spelletjes";
        
        $conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo "Connected successfully";
            return $conn;
    }
    function getGames($conn){
        $stnt = $conn->prepare("SELECT * FROM games order by id;");
        $stnt->execute();
        $results = $stnt->fetchAll();
        $conn = null;
        return $results;
    }
    function getGame($getresult){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("SELECT * FROM games where id = :id ;");
        $stnt->bindParam(':id', $getresult);
        $stnt->execute();
        $results = $stnt->fetchAll();
        $conn = null;
        return $results;
    }
    function Name($getresult){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("SELECT name FROM games where id = :id ;");
        $stnt->bindParam(':id', $getresult);
        $stnt->execute();
        $id = $stnt->fetch();
        $conn = null;
        return $id;
    }
    function deleteGame($getresult){
        $conn = connect();
        $deletegame = $conn->prepare("DELETE FROM games WHERE id = :id");
        $deletegame->bindParam(':id', $getresult);
        $deletegame->execute();
        $conn = null;
    }
    function planner($id, $time, $host, $players){
        $conn = openDataBaseConnection();
        $insert = $conn->prepare("INSERT INTO `planning` (`id`, `gameid`, `starttime`, `host`, `players`) VALUES (null, :id, :time, :host, :players)");
        $insert->bindParam(':id', $id);
        $insert->bindParam(':time', $time);
        $insert->bindParam(':host', $host);
        $insert->bindParam(':players', $players);
       $conn = null;
       $insert->execute();
        return $insert->errorCode();

   }

    function getPlanning(){
        $conn = openDataBaseConnection();
        $stnt=$conn->prepare('SELECT * FROM planning');
        $stnt->execute();
        return $stnt->fetchAll();
        $conn = null;
    
    }
    function deletePlanning($getPlanningId){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("DELETE FROM planning WHERE id = :id");
        $stnt->bindParam(':id', $getPlanningId);
        $stnt->execute();
        $conn = null;
    }
    function updatePlanning( $updatedid , $updatedtime, $updatedhost, $updatedplayers , $updatePlanning){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("UPDATE `planning` SET id = :id, starttime = :time,  host = :host, players = :players WHERE id = :id");
       
        $stnt->bindParam(':id', $updatedid);
        $stnt->bindParam(':time', $updatedtime);
        $stnt->bindParam(':host', $updatedhost);
        $stnt->bindParam(':players', $updatedplayers);
        $stnt->execute();
        $conn = null;
        return $update;
        
    }
?>