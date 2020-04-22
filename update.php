<?php


$servername = "localhost";
    $username = "games";
    $password = "hallokever";
	$dbname = "spelletjes";
	
	$conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
	$stnt = $conn->prepare('SELECT * FROM games');
	$stnt->execute();
    $result = $stnt->fetchAll();
    $stnt= $pdo-> prepare("UPDATE game set name =:name );
$stnt->bindParam("name");
	
	
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
</head>
<body background=".img/gamers.jpg">

<div id="navbar"></div>
<h2><a href="indekc.php">home</a></h2>
<h2><a href="planning.php">planning</a></h2>
<h2><a href="update.php">update game
</a></h2>


<h1>update</h1>

 

</body>
</html>