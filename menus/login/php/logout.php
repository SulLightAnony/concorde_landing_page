<?php 
    session_start();
    session_destroy();
    header("Location: login.php?code=thisisonlyforlogoutandthisisreallyreallysecret1100");
?>