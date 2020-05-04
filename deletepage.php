<?php
      require "./functie.php";
    $conn = connect();
    $getresult = $_POST['id'];
    $getPlanning = $_POST['planningid'];
    $gamename = Name($getresult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="deletepage">
        <div id="deleteText">
            <? if($getresult != NULL){ ?>
                <p>weet je het zker dat je het wilt deleten.</p>
            <form action="indekc.php" method="post" class="deleteForm">
                <input type="hidden" value="<?= $getresult ?>" name="id"></input>
                <input type="submit" value="YES" class="deleteButton"></input>
            </form>
           

            <? if($getPlanning != NULL){ ?>
            <p>weet je zeker dat je het wilt deleten.</p>
            <form action="planning.php" method="post" class="deleteForm">
            <input type="hidden" name="action" value="delete">
                <input type="hidden" value="<?= $getPlanning ?>" name="planningid"></input>
                <input type="submit" value="YES" class="deleteButton"></input>
            </form>
            <form action="planning.php" method="post" class="deleteForm">
                <input type="submit" value="NO" class="deleteButton"></input>
            </form>


        </div>
 
</body>
</html>