<?php

    include_once "../../config/dbconnect.php";
    
    $highlights_id=$_POST['record'];
    $query="DELETE FROM club_highlights where highlights_id='$highlights_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Highlight is Deleted";
    }
    else{
        echo"Not able to Highlight";
    }
    
?>