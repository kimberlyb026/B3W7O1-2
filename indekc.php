<?php
      require("functie.php");
	  $conn =  openDatabaseConnection();
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title>games</title>

<body>

<div class="navbar"></div>
<a href="planning.php">PLANNING</a>
<a href="create.php">CREATE</a>
</div>




<div class="container">
  <h2>Games</h2>
   <div class="row">
   <?php
            $results = getGames($conn);
            foreach($results as $result){
                ?>
        <div class="img-thumbnail col-2">
        <a class="game" href="game.php?id=<?=$result['id']?>">
        <h2 class="text-center"><?=$result['name']?></h2> 
        <div class="ml-5">
                <img class="w-50 ml-5 mt-5 mb-5" src="img/<?= $result['image']?>">
				<a href="game.php?id=<? echo $result['id'] ?>">More info</a><br>
         </div>
            </a>
         </div>
      <?php
          }
      ?>


</body>
</html>