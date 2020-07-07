<?php

session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] !== ''){
    echo "Привет, " . $_SESSION['login'] . "!". PHP_EOL;
    echo '<a href="exit.php">Выйти</a>';
} else {
    include('./index.html');
}
