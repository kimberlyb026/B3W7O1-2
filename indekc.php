<?php


$servername = "localhost";
    $username = "games";
    $password = "hallokever";
	$dbname = "spelletjes";
	
	$conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
	$stnt = $conn->prepare('SELECT * FROM games');
	$stnt->execute();
	$result = $stnt->fetchAll();
	
    try{
$conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);

echo "connected succesfully";

}

catch(PDOexception $e){
	echo " connection failed". $e->getMessage();
}


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title></title>

<body>

<div id="navbar"></div>
<h2><a href="indekc.php">home</a></h2>
<h2><a href="planning.php">planning</a></h2>



<h1>home</h1>


<?php
foreach ($result as $games) {

	echo"<div class= 'alles'>";
	echo '<a href="game.php/?name=' . urlencode($games['name']) . '">';
	echo "<img src='img/" .$games['image'] . "'>";

	    echo "<p id='name'>".$games['name']. "</p>";

echo "</a>";

echo"<div>";
}

?>

</body>
</html>