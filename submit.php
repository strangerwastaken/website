<?php
session_start();

// Value halim
$email=$_POST["email"];
$password=$_POST["password"];


//id password check

if($email==$_SESSION["email"] && $password==$_SESSION["password"]){
$_SESSION["user"]= "admin@admin.com";
echo "logged in successfully. click here to go to <a href='./index.php'>home page</a>";
}
else {
    echo "username / password not found. ";
}
?>