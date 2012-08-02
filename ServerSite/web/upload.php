<?php
session_start();

require_once '../inc/common.php';

echo "profile";


if (isset($_SESSION['username']) == FALSE)
    header("Location:index.php");     

$username = $_SESSION['username'];

print_r($_FILES["uploadedfile"]);

$imagename = genImageString();
$owner = 1;
$album = $_POST['album'];

$target_path = "./../uploads/";

$target_path = $target_path . $imagename; 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
    
    $db = new DatabaseController();
    $db->registerImage($imagename, $album, $owner);
    
} else{
    echo "There was an error uploading the file, please try again!";
}
?>
