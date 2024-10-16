<?php
    include_once "../../config/dbconnect.php";
    
    $points_table_id=$_POST['points_table_id'];
    $matches_played= $_POST['matches_played'];
    $wins= $_POST['wins'];
    $draws= $_POST['draws'];
    $losses= $_POST['losses'];
    $points= $_POST['points'];
    $goals_scored= $_POST['goals_scored'];
    $goals_conceded= $_POST['goals_conceded'];
    $goal_difference= $_POST['goal_difference'];

    $updateItem = mysqli_query($conn,"UPDATE points_table SET 
        matches_played='$matches_played', 
        wins='$wins', 
        draws='$draws',
        losses='$losses', 
        points='$points', 
        goals_scored='$goals_scored', 
        goals_conceded='$goals_conceded', 
        goal_difference='$goal_difference' 
        WHERE points_table_id= $points_table_id");


    if($updateItem)
    {
        echo "true";
    }
    else
    {
        echo mysqli_error($conn);
    }
?>