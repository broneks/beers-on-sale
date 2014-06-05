<?php

    include 'settings.php';
    include 'functions.php';
    
    // get on sale beer object array
    $beers_json = download_page(API_URL . '/beers?on_sale=true');
    $beers = json_decode($beers_json)
    
?>
