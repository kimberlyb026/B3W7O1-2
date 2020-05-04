<?php
   include_once  "./functie.php";
   $conn = openDataBaseConnection();
    $results = getGames($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">

    <title>create</title>
</head>
<body>

<div class="navbar"></div>
<a href="indekc.php">ALLE GAMES </a>
<a href="create.php">CREATE</a>
</div>

        <div id="container">
            <div id="mainpage">
            <form method="post" action="planning.php" style="margin: 25px">
            <input type="hidden" name="action" value="create">
			  Explainer : <input type="text" name="host" placeholder="host name" required/><br />
                <label>Select game:</label>
                <select name="gameid">
                    <? foreach($results as $games) { ?>
                    <option value="<?= $games['id'] ?>" required><?= $games['name'] ?></option>
                    <? } ?>
                </select><br>
                Time: <input type="time" value="Submit" name="time" required/><br>
			Date: <input type="date"  name="date" required/><br>
                Players: <input type="text" placeholder="players" name="players" required/><br>
                <input type="submit" value="Submit" />
            </form>
            </div>
        </div>
  
</body>
</html>