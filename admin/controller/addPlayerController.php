<?php
    include_once "../../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $player_name= $_POST['player_name'];
        $position= $_POST['position'];
        $nationality= $_POST['nationality'];
        $dob= $_POST['dob'];
       
            
        $file_name = time().'-'.$_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$file_name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$file_name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO players
         (name,image,nationality,dob,position) 
         VALUES ('$player_name','$image','$nationality','$dob','$position')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Player added successfully.";
         }
     
    }
        
?>