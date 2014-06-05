<script>

    // bind initialize to page load event
    $("div:jqmData(role='page'):last").bind('pageshow', initialize);

    // create map variable
    var map;

    // create LatLng object
    var storeCoords = new google.maps.LatLng(<?php echo $store->latitude ?>, <?php echo $store->longitude ?>);

    // initializes map
    function initialize() {

        // configure map
        var mapOptions = {
            zoom: 13,
            center: storeCoords,
            disableDefaultUI: true
        };

        // associate variable with html element
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        // create marker
        marker = new google.maps.Marker({
            position: storeCoords,
            map: map,
            title: "<?php echo $store->name ?>"
        });

    }

</script>
