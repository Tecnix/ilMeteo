<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION=array();
    ob_start();
    header('Location: ..\index.html');
    ob_end_flush();
    exit();
?>