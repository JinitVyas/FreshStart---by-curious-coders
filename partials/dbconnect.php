<?php
    $server = 'localhost';
    $username = 'root';
    $pw = '';
    $database = 'freshstart_cc';
    $conn = mysqli_connect($server, $username, $pw, $database);

    if (!$conn) {
        die("Technical issue! Error in connecting the server ! please contact the developer");
    }
?>