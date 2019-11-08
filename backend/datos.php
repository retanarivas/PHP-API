<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

include_once('db.php');

    if ($_GET['currency'] === 'euro' || $_GET['currency'] === 'dolar') {
        $query = 'SELECT * FROM '. $_GET['currency'];
        $result = $conn->query($query);
        $datos = mysqli_fetch_all($result);

        echo json_encode($datos);
    }else {
        echo 'search request not found';
    }