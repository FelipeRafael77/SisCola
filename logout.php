<?php
    
    session_start();
    session_destroy();
    header("location: telalogin.php");
    exit();

?>