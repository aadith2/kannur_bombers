<?php
    include_once "../../config/dbconnect.php";

    $news_id=$_POST['news_id'];
    $title= $_POST['title'];
    $content= $_POST['content'];
    $publication_date= $_POST['publication_date'];
    $author= $_POST['author'];

    $updateItem = mysqli_query($conn,"UPDATE club_news SET 
        title='$title', 
        content='$content', 
        publication_date='$publication_date',
        author='$author' 
        WHERE news_id=$news_id");


    if($updateItem)
    {
        echo "true";
    }
    else
    {
        echo mysqli_error($conn);
    }
?>