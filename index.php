<?php 
    include 'controllers/index_controller.php';
    include 'sections/head.php';
?>
<div data-role="page" id="home">
    <div data-role="header">
        <h1>Beers on Sale</h1>
    </div>

    <ul data-role="listview" data-inset="true">
        <?php foreach($beers as $beer): ?>   
            <li><a href="beer_details.php?beer_id=<?php echo $beer->beer_id ?>"> 
                <img src="<?php echo $beer->image_url ?>" />
                <h2><?php echo $beer->name ?></h2>
            </a></li>
        <?php endforeach ?>
    </ul>
</div>

<?php
    include 'sections/footer.php'
?>
