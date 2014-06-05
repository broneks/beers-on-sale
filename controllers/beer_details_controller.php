<?php

    include 'settings.php';
    include 'functions.php';

    $beer_id = $_GET['beer_id'];
    
    $beer_json = download_page(API_URL . "/beers/$beer_id");
    $beer = json_decode($beer_json);

    $products_json = download_page(API_URL . "/beers/$beer_id/products?on_sale=true");
    $products = json_decode($products_json);
    
?>
