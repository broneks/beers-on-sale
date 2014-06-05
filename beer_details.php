<?php 
    include 'controllers/beer_details_controller.php';
    include 'sections/head.php';
?>
<div data-role="page" id="beer-details">
    <div data-role="header">
    <h1><?php echo $beer->name ?></h1>
    </div>
    <img src="<?php echo $beer->image_url ?>" alt="<?php echo $beer->name ?>" />
    <table data-role="table" id="table-custom-2" data-mode="none" class="ui-body-d ui-shadow table-stripe ui-responsive">
        <tr>
            <td>Type:</td>
            <td><?php echo $beer->type ?></td>
        </tr>

        <tr>
            <td>Category:</td>
            <td><?php echo $beer->category ?></td>
        </tr>
        
        <tr>
            <td>Alcohol Content:</td>
            <td><?php echo $beer->abv ?>%</td>
        </tr>

        <tr>
            <td>Brewer:</td>
            <td><?php echo $beer->brewer ?></td>
        </tr>

        <tr>
            <td>Country:</td>
            <td><?php echo $beer->country ?></td>
        </tr>
    </table>
    
    <div class="ui-body">
        <h3>Products on Sale</h3>
    </div>

    <ul data-role="listview" data-inset="true">
        <?php foreach($products as $product): ?>
            <li><a href="stores.php?product_id=<?php echo $product->product_id ?>">
                <?php echo $product->size ?> - $<?php echo $product->price ?> 
            </a></li>
        <?php endforeach ?>
    <ul>

</div>


<?php
    include 'sections/footer.php'
?>