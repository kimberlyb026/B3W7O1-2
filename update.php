<?php
    include_once  "./functie.php";
    $conn = connect();
    $results = getGames($conn);
    $planningId = $_GET['planningid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/908fb2de93.js" crossorigin="anonymous"></script>
    <title>Planning</title>
</head>
<body>

       
        </div>
        <div id="container">
            <div id="mainpage">
            <form method="post" action="planning.php" style="margin: 25px">
			</select>
			<input type="hidden" name="action" value="update">
        <label for="starttime">START TIME:</label><input type="time" name="starttime" id="starttime">
        <label for="host">HOST:</label><input type="text" name="host" id="host">
        <label for="players">PLAYERS:</label><input type="text" name="players" id="players">
        <input type="submit" value="PLAN DIT SPEL!" style="text-align: center; width: 10%">
    </form>
            </div>
        </div>
        
</body>
</html>