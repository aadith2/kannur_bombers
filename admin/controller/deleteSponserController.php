<?php

    include_once "../../config/dbconnect.php";
    
    $sponser_id=$_POST['record'];
    $query="DELETE FROM sponsers where sponser_id='$sponser_id'";

    $img_result = mysqli_query($conn, "SELECT image FROM sponsers WHERE sponser_id='$sponser_id'");

    if ($img_result) {
        // Fetch the row as an associative array
        $row = mysqli_fetch_assoc($img_result);
        
        // Get the image string from the row
        $image = '.'.$row['image'];
        unlink($image);
    }
    $data=mysqli_query($conn,$query);

    if($data){
        echo"sponser is Deleted";
    }
    else{
        echo"Not able to Sponser";
    }
    
?>