<?php
session_start();

echo "profile";

$isset = 0;

if (isset($_SESSION['username']))
    $isset = 1;
echo $isset;
   if ($isset == 0){
    header("Location:index.php");
    exit();
   }

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Image Hub Profile: <?=$username?></title>
    </head>
    <body>
        <header>
            <h1> Welcome <?=$username?> </h1>
          
        </header>
        <div id="upload" >
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label>Album:</label>
                <input type="text" name="album" />
                <label>Image:</label>
                <input type="file" name="uploadedfile" id="uploadedfile" />
                <input type="submit" value="upload"/>
            </form>
        </div>
        <div id="photos">
            
        </div>
    </body>
</html>