<?php
    include_once "../../config/dbconnect.php";

    $highlights_id=$_POST['highlights_id'];
    $url= $_POST['url'];
    $updateItem = mysqli_query($conn,"UPDATE club_highlights SET 
        url='$url'  
        WHERE highlights_id=$highlights_id");


    if($updateItem)
    {
        echo "true";
    }
    else
    {
        echo mysqli_error($conn);
    }
?>