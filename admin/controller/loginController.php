<?php
include_once "../../config/dbconnect.php";
$username= $_POST['username'];
$password= $_POST['password'];
header("Location: index.php");
$sql="SELECT * FROM users";
$result=$conn-> query($sql);
if($result-> num_rows > 0)
{
   
}
$_SESSION['login'] = 'error';
?>