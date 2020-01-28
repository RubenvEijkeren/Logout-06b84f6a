<?php 
setcookie("LoggedInUser", $_GET['id'], time() - 3600);
header("Location: ./index.php");
?>