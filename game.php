<?php
   require "./functie.php";
   $conn =  openDatabaseConnection();
    $getresult = $_GET['id'];
    if($getresult == NULL){
       $getresult = $_POST['id']; 
    }
    $results =  getGame($getresult);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        $getresult = $_POST['id'];
    
        $update = updateCharacter($getresult, $locationid);
        $conn = connect();
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title></title>

<body>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/908fb2de93.js" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>
<body>
<div id="header">
   
</div>
<div id="optionsDiv">
        
<div class="navbar"></div>
<a href="planning.php">PLANNING</a>
<a href="create.php">CREATE</a>
</div>

    
<div id="container">
        <div id="gamepage">
                <div id="gameHeader">
				<h1 class="headertext"> <? echo $results[0]['name'] ?></h2>
				<a class="backbutton" href="indekc.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a><br>
                    <img src="img/<? echo $results[0]['image']?>" id="profilepicture">
                    <p class="gameInfo">Skills: <? echo $results[0]['skills'] ?></p>
                    <p class="gameInfo">Playtime: <? echo $results[0]['play_minutes'] ?> minutes</p>
                    <p class="gameInfo">Min/Max players: <? echo $results[0]['min_players'] ?> / <? echo $results[0]['max_players'] ?></p>
                    <p class="gameInfo">Expasnsions: <?  
                    if ($results[0]['expansions'] == NULL){
                        echo "none";
                    }
                    else{
                        echo $results[0]['expansions'];
                    }
                        ?></p>
                    <p class="gameInfo">Explain minutes: <? echo $results[0]['explain_minutes'] ?> minutes</p>
                </div>
                <div id="gameBody">
                    <? echo $results[0]['description'] ?>
					<p class="mt-4">url: <a href="<?= $result['url']?>"><?= $result['url'] ?></a></p>
                    
                    <? echo $results[0]['youtube'] ?>
			
                </div>
        </div>
    </div>
</body>