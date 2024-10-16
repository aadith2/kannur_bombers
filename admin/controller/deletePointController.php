<?php

    include_once "../../config/dbconnect.php";
    
    $points_table_id=$_POST['record'];
    $query="DELETE FROM points_table where points_table_id='$points_table_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Point is Deleted";
    }
    else{
        echo"Not able to delete Point";
    }
    
?>