<script>
    $("div:jqmData(role='page'):last").bind('pageshow', initialize);
    // create map variable
    var map;

    // initializes map
    function initialize() {

        // configure map
        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(<?php echo $store->latitude ?>, <?php echo $store->longitude ?>),
            disableDefaultUI: true
        };

        // associate variable with html element
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				
        storeCoords = new google.maps.LatLng(<?php echo $store->latitude ?>, <?php echo $store->longitude ?>);

        // create marker
        marker = new google.maps.Marker({
            position: storeCoords,
            map: map,
            title: "<?php echo $store->name ?>"
        });

    }
	

    google.maps.event.addDomListener(
        window, 
        'load',
        initialize
    );

</script>
