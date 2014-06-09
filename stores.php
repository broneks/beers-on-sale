<?php 

    include 'controllers/stores_controller.php';
    include 'sections/head.php';

?>

<!-- Stores Page -->
<div data-role="page" id="beer-details">

    <!-- Header -->
    <div data-role="header">
        <h1><?php echo $product->size . ' - ' . $product->name ?></h1>

        <a href="beer_details.php?beer_id=<?php echo $product->beer_id ?>">Back to Beer</a>
    </div>
    
    <!-- Content -->
    <div data-role="content">
        <ul data-role="listview" data-filter="true" data-filter-placeholder="Search stores..." data-inset="true">
            <?php foreach($stores as $store): ?>
                <li><a href="store_details.php?store_id=<?php echo $store->store_id ?>&amp;product_id=<?php echo $product->product_id ?>">
                    <?php echo $store->name ?> - <?php echo $store->city ?> 
                </a></li>
            <?php endforeach ?>
        <ul>
    </div>
</div>

<?php include 'sections/footer.php' ?>
