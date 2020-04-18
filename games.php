<?php


$servername = "localhost";
    $username = "games1";
    $password = "hallo1234";
    $dbname = "spelletjes";

        $conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title></title>
</head>
<body background=".img/gold.jpg">
<div id="navbar"></div>
<h2><a href="indekc.php">home</a></h2>
<h2><a href="games.php">games om te spelen</a></h2>
<h2><a href="indekc.php">planning</a></h2>


<h1>games om te spelen</h1>


<!-- <?php
foreach ($result as $games) {
echo "<div class='table'>";
	echo"<div class= 'alles'>";
	echo '<a href="character.php/?name=' . urlencode($games['name']) . '">';
	echo "<img src='img" .$games['avatar'] . "'>";
    echo "<p id='name'>".$games['name']. "</p>";
	echo "<p id='description'> discription :".$games['discription']."</p>";
	echo "<p id='defense'> defense :".$games['defense']."</p>";
	echo "<p id='attack'> attack :".$games['attack']. "</P>";
echo "</a>";
echo "</table>";
	echo"</div>";
}

?> -->

</body>
</html>