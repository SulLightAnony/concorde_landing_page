<?php
    session_start();

    if(isset($_GET['code']) && $_GET['code'] === 'JikaBisaAkuKenapaDia1100') {
        $_SESSION['granted'] = true;
        header('Location: menus/login/php/login.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    }
?>