<?php

    include_once "../../config/dbconnect.php";
    
    $player_id=$_POST['record'];
    $query="DELETE FROM players where player_id='$player_id'";

    $img_result = mysqli_query($conn, "SELECT image FROM players WHERE player_id='$player_id'");

    if ($img_result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($img_result);
        
        // Get the image string from the row
        $image = '.'.$row['image'];
        unlink($image);
    }
    $data=mysqli_query($conn,$query);

    if($data){
        echo"Player is Deleted";
    }
    else{
        echo"Not able to Player";
    }
    
?>