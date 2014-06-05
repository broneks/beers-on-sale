<?php 
    include 'controllers/stores_controller.php';
    include 'sections/head.php';
?>
<div data-role="page" id="beer-details">
    <div data-role="header">
        <h1><?php echo $product->name ?></h1>
    </div>
    
    <ul data-role="listview" data-filter="true" data-filter-placeholder="Search stores..." data-inset="true">
        <?php foreach($stores as $store): ?>
            <li><a href="store_details.php?store_id=<?php echo $store->store_id ?>">
                <?php echo $store->name ?> - <?php echo $store->city ?> 
            </a></li>
        <?php endforeach ?>
    <ul>

</div>


<?php
    include 'sections/footer.php'
?>