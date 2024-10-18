<?php
    include_once "../../config/dbconnect.php";
    
        $team_name= $_POST['team_name'];
        $matches_played= $_POST['matches_played'];
        $wins= $_POST['wins'];
        $draws= $_POST['draws'];
        $losses= $_POST['losses'];
        $points= $_POST['points'];
        $goals_scored= $_POST['goals_scored'];
        $goals_conceded= $_POST['goals_conceded'];
        $goal_difference= $_POST['goal_difference'];
       
    

         $insert = mysqli_query($conn,"INSERT INTO points_table
         (team_name,matches_played,wins,draws,losses,points,goals_scored,goals_conceded,goal_difference) 
         VALUES ('$team_name','$matches_played','$wins','$draws','$losses','$points','$goals_scored','$goals_conceded','$goal_difference')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Points added successfully.";
         }
     
    
        
?>