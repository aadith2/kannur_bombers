<?php
    include_once "../../config/dbconnect.php";

    $sponser_id=$_POST['sponser_id'];
    $name= $_POST['name'];


    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image = time().'-'.$img;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            move_uploaded_file($tmp, $dir.$image);
            unlink('.'.$_POST['existingImage']);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE sponsers SET 
        name='$name', 
        logo='$final_image'
        WHERE sponser_id='$sponser_id'");


    if($updateItem)
    {
        echo "true";
    }
    else
    {
        echo mysqli_error($conn);
    }
?>