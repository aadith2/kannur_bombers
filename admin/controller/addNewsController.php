<?php
    include_once "../../config/dbconnect.php";
    

        $title= $_POST['title'];
        $content= $_POST['content'];
        $publication_date= $_POST['publication_date'];
        $author= $_POST['author'];


         $insert = mysqli_query($conn,"INSERT INTO club_news
         (title,content,publication_date,author) 
         VALUES ('$title','$content','$publication_date','$author')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "News added successfully.";
         }
     
    
        
?>