<?php

    include 'settings.php';
    include 'functions.php';

    $store_id = $_GET['store_id'];
    
    $store_json = download_page(API_URL . "/stores/$store_id");
    $store = json_decode($store_json);
?>
