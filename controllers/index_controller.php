<?php
    include 'settings.php';
    include 'functions.php';
    
    $beers_json = download_page(API_URL . '/beers?on_sale=true');
    $beers = json_decode($beers_json)

    
?>
