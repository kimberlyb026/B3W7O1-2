<?php
   include_once  "./functie.php";
   $conn = openDataBaseConnection();
   if ($_POST['action']=="create"){
    $gameid = $_POST['gameid'];
    $time = $_POST['time'];
    $host = $_POST['host'];
    $players = $_POST['players'];
    $dt = new DateTime($_POST['date'] . "T" . $_POST['time']);
        $sendDT = $dt->format('Y-m-d\TH:i:s.u');
    if ($players != NULL){
        planner($gameid, $sendDT, $host, $players);
        echo "<script>alert('SUCCESSFULLY CREATED A PLANNING')</script>";
    }
   }
  
   if ($_POST['action']=="delete"){
    $getPlanningId = $_POST['planningid'];
    if($getPlanningId != NULL){
        $planningId = deletePlanning($getPlanningId);
        echo "<script>alert('SUCCESSFULLY DELETED')</script>";
    }
   }

   if ($_POST['action']=="update"){
    $updatePlanning = $_POST['updatedplanningid'];
    $updatedtime = $_POST['updatedtime'];
    $updatedexplainer = $_POST['updatedhost'];
    $updatedgameid = $_POST['updatedid'];
    $updatedplayers = $_POST['updatedplayers'];
    if ($updatedtime != NULL){
        updatePlanning($updatedgameid , $updatedtime, $updatedexplainer, $updatedplayers , $updatePlanning);
        echo "<script>alert('SUCCESSFULLY UPDATED')</script>";
    }
}
    $results = getPlanning();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    
    <title>Planning</title>
</head>
<body>

      
<div class="navbar"></div>
<a href="planning.php">PLANNING</a>
<a href="create.php">CREATE</a>
</div>

        <div id="container">
            <div id="mainpage">
            <div style="width: 200px; margin:10px">

            </div>
            <?php
            foreach($results as $insert){
            $getGameName = Name($result['id']);
            $gameInfo = getGame($result['id']);
        ?>
            <div class="planningItem">
            <img src="img/<? echo $gameInfo[0]['image']?>">
            <p>Planning id = <? echo $result['id'] ?> </p>
            <p>Game name = <? echo $getGameName[0][0] ?></p>
            <p>Time H:M:S = <? echo $result['starttime'] ?></p>
           
            <p>host = <? echo $result['host'] ?></p>
            <p>Players = <? echo $result['players'] ?></p>
            <p>Playtime = <? echo $gameInfo[0]['play_minutes'] ?> </p>
            <form action="deletepage.php" method="post">
                <input type="hidden" value="<?= $result['id'] ?>" name="planningid"></input>
                <input type="submit" value="Delete" class="deletePageButton"></input>
            </form>

            <form action="update.php?id=<? echo $result['id'] ?>" method="get">
                <input type="hidden" value="<?= $result['id'] ?>" name="planningid"></input>
                <input type="submit" value="Update" class="deletePageButton"></input>
            </form>
            </div>
        <?
            }
        ?>
            </div>
        </div>
       
</body>
</html>