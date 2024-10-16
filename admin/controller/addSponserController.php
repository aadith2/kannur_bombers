<?php
    include_once "../../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $name= $_POST['name'];

        $file_name = time().'-'.$_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$file_name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$file_name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO sponsers
         (name,logo) 
         VALUES ('$name','$image')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Sponser added successfully.";
         }
     
    }
        
?>