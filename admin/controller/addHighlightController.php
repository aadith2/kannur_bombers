<?php
    include_once "../../config/dbconnect.php";
    
        $url= $_POST['url'];
        $insert = mysqli_query($conn,"INSERT INTO club_highlights
         (url) 
         VALUES ('$url')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "highlight added successfully.";
         }
    
     
?>