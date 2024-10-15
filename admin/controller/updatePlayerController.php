<?php
    include_once "../../config/dbconnect.php";

    $player_id=$_POST['player_id'];
    $name= $_POST['player_name'];
    $position= $_POST['position'];
    $nationality= $_POST['nationality'];
    $dob= $_POST['dob'];

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
    $updateItem = mysqli_query($conn,"UPDATE players SET 
        name='$name', 
        position='$position', 
        nationality='$nationality',
        image='$final_image',
        dob='$dob' 
        WHERE player_id=$player_id");


    if($updateItem)
    {
        echo "true";
    }
    else
    {
        echo mysqli_error($conn);
    }
?>