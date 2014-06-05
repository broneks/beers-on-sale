<?php
    include 'settings.php';
    include 'functions.php';
    
    $product_id = $_GET['product_id'];
    
    $product_json = download_page(API_URL . "/products/$product_id");
    $product = json_decode($product_json);


    $stores_json = download_page(API_URL . "/products/$product_id/stores");
    $stores = json_decode($stores_json)

    
?>
