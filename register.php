<?php
session_start();
$email=$_POST["email"];
$password=$_POST["password"];
if ($email!=null && $password!=null ){
    $_SESSION["email"]= $email;
    $_SESSION["password"]= $password;
    echo "registered successfully. click <a href='./form.php'>here</a> to login";
}
else {
?>
<html>
    <head></head>
    <body>
        <form method="POST">
            <div>
                <p>username</p>
                <input type="username" name="username" placeholder="enter your username">
            </div>
            <div>
                <p>email</p>
                <input type="email" name="email" placeholder="enter your email"> 
            </div>
            <div>
                <p>password</p>
                <input type="password" name="password" placeholder="enter your password">
            </div>
            <div>
                <br>
                <button>Register</button>
            </div>
        </form>
    </body>
</html>
 <?php }
?>