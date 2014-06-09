<?php 

    include 'controllers/store_details_controller.php';
    include 'sections/head.php';

?>

<!-- Store Details Page -->
<div data-role="page" id="beer-details">

    <!-- Map Init -->
    <?php include 'map_init.php' ?>

    <!-- Header -->
    <div data-role="header">
        <h1><?php echo $store->name ?></h1>

        <a href="stores.php?product_id=<?php echo $_GET['product_id'] ?>">Back to Stores</a>
    </div>

    <!-- Content -->
    <div data-role="content">
        <!-- Map -->
        <div id="map-canvas"></div>

        <!-- Details -->
        <div class="ui-body ui-body-a">
            <p><?php echo $store->address ?></p>
            <p><?php echo $store->postal_code ?>, <?php echo $store->city ?></p>
            <p><?php echo $store->phone ?></p>
        </div>

        <!-- Hours -->
        <table data-role="table" id="table-custom-2" data-mode="none" class="ui-body-d ui-shadow table-stripe ui-responsive">
            <tr>
                <th>Day</th>
                <th>Hours</th>
            </tr>
            <tr>
                <td>Monday</td>
                <td><?php echo $store->monday_open ?> - <?php echo $store->monday_close ?></td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td><?php echo $store->tuesday_open ?> - <?php echo $store->tuesday_close ?></td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td><?php echo $store->wednesday_open ?> - <?php echo $store->wednesday_close ?></td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td><?php echo $store->thursday_open ?> - <?php echo $store->thursday_close ?></td>
            </tr>
            <tr>
                <td>Friday</td>
                <td><?php echo $store->friday_open ?> - <?php echo $store->friday_close ?></td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td><?php echo $store->saturday_open ?> - <?php echo $store->saturday_close ?></td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td><?php echo $store->sunday_open ?> - <?php echo $store->sunday_close ?></td>
            </tr>
        </table>
    </div>
</div>

<?php include 'sections/footer.php' ?>
