<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'API');

    if(!isset($conn)) {
        echo 'Not connected';
    }