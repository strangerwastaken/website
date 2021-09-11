<?php
session_start();

if ($_SESSION["user"] != null) {
    echo "welcome back " . $_SESSION["user"];
    echo "<a href='./logout.php'> logout</a>";
} else { ?>

    welcome user. please login from <a href='./form.php'>here</a>

    <br/>
    
    don't have an account ? click <a href='./register.php'> here</a> to register.

<?php }
?>