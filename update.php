<?php
    include_once  "./functie.php";
    $conn = openDatabaseConnection();
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
			<input type="hidden" name="id" value="<?php echo $planningId ?>">
			
		
			<input type="hidden" name="action" value="update">
			Time: <input type="time" value="Submit" name="time" required/><br>
			Date: <input type="date"  name="date" required/><br>
                Players: <input type="text" placeholder="players" name="players" required/><br>
				Host: <input type="text" placeholder="host" name="host" required/><br>
                <input type="submit" value="Submit" />
       
    </form>
            </div>
        </div>
        
</body>
</html>