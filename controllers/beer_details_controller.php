<?php

    include 'settings.php';
    include 'functions.php';
        
    // get beer id
    $beer_id = $_GET['beer_id'];
    
    // get beer object by id
    $beer_json = download_page(API_URL . "/beers/$beer_id");
    $beer = json_decode($beer_json);

    // get on sale product object array
    $products_json = download_page(API_URL . "/beers/$beer_id/products?on_sale=true");
    $products = json_decode($products_json);
    
?>
