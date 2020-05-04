<? 

require "./functie.php";
    $conn = connect();
    $getresult = $_POST['id'];
    $deletegame = deleteGame($getresult);
    if($deletegame != NULL){
        header("Location: indekc.php");
    }
    $getPlanningId = $_POST['planningid'];
    $planningId = deletePlanning($getPlanningId);
    if($planningId != NULL){
        echo "<script>alert('SUCCESSFULLY DELETED')</script>";
        header("Location: planning.php");
    }

?>