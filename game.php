<?php


$servername = "localhost";
    $username = "games";
    $password = "hallokever";
	$dbname = "spelletjes";
	
	$conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);
	$stnt = $conn->prepare('SELECT * FROM games');
	$stnt->execute();
	$result = $stnt->fetch();

	

	
	
//     try{
// $conn = new PDO('mysql:host=localhost;dbname=spelletjes', $username, $password);

// echo "connected succesfully";

// }

// catch(PDOexception $e){
// 	echo " connection failed". $e->getMessage();
// }


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title></title>

<body>

<div id="navbar"></div>
<h2><a href="../indekc.php">home</a></h2>
<h2><a href="../planning.php">planning</a></h2>



<h1>home</h1>


<?php


	echo"<div class= 'games'>";
	echo "<img  src='img/" .$planning['image'] ."'>";
		echo"</div";

echo"<div class= 'gamenaam'>";
	echo "<h1>".$games['name']. "</h1>";
	echo "</div>";

	echo"<div class= 'bio'>";
echo "<p>".$games['description']. "</P>";
echo"</div>";




echo"<div>";


?>
<div class= "container">

<form action="update.php" method ="post">
	<input type="hidden" value="<php> echo $planning ['name']; ?>" name="name" >
	<input type="submit" value="update">
</form>

<form action="delete.php" method ="post">
	<input type="hidden" value="<php> echo $planning ['name']; ?>" name="name" >
	<input type="submit" value="delete">
</form>


</body>
</html>