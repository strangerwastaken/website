<?php
session_start();
$_SESSION["user"]=null;
echo "your are <a href='./index.php'>logged out</a>";
?>