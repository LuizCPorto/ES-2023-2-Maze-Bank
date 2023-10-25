<?php
    session_start();
    session_destroy();
    header('Location: ../../../../../ES-2023-2-Maze-Bank/index.html');
    exit;
?>
