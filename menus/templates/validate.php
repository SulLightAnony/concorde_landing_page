<?php
    session_start();
    include "../../templates/connection.php";
    if( !isset($_SESSION['Loged']) ){header("location: ../../login/php/login.php");}
?>