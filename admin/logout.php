<?php

session_start();

if (isset($_SESSION['index'])) {
    unset($_SESSION);

    session_destroy();

//
    die("Silahkan login <a href='index.php'>di sini</a>");
}