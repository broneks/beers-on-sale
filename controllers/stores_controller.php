<?php

    include 'settings.php';
    include 'functions.php';
    
    // get product id
    $product_id = $_GET['product_id'];
    
    // get product object by id
    $product_json = download_page(API_URL . "/products/$product_id");
    $product = json_decode($product_json);

    // get store object array
    $stores_json = download_page(API_URL . "/products/$product_id/stores");
    $stores = json_decode($stores_json)
    
?>
