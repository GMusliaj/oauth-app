<?php

require '../inc/DatabaseController.php';

$db = new DatabaseController();
$b = $db->userExists("admin", "admin");
echo "<br/>";
echo $b;
?>
