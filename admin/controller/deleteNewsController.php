<?php

    include_once "../../config/dbconnect.php";
    
    $news_id=$_POST['record'];
    $query="DELETE FROM club_news where news_id='$news_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"News is Deleted";
    }
    else{
        echo"Not able to Delete News";
    }
    
?>