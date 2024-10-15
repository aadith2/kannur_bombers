<?php

    include_once "../../config/dbconnect.php";
    
    $player_id=$_POST['record'];
    $query="DELETE FROM players where player_id='$player_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Player is Deleted";
    }
    else{
        echo"Not able to Player";
    }
    
?>