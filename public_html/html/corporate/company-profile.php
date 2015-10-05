<?php

function assetSrc($file) {
    echo $file . '?' . filemtime($file);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="<?php assetSrc('css/style.css'); ?>">
    </head>
    <body>
        <?php include('./_include/navbar.php'); ?>
        <div id="company-profile">
            <?php include('./_include/compro/banner.php'); ?>
            <?php include('./_include/compro/breadcrumbs.php'); ?>
            <?php include('./_include/compro/menu.php'); ?>
            <?php include('./_include/compro/offices.php'); ?>
            <?php include('./_include/compro/detailinfo.php'); ?>
            <?php include('./_include/compro/history.php'); ?>
            <?php include('./_include/compro/contact.php'); ?>
        </div>
        <?php include('./_include/footer.php'); ?>
        <script>
            $(document).ready(function () {
                function initialize()
                {
                    var myCenter = new google.maps.LatLng(10.78783, 106.70083);
                    var myCenter2 = new google.maps.LatLng(10.78783, 106.70083);
                    var myCenter3 = new google.maps.LatLng(10.78783, 106.70083);
                    
                    var mapProp = {
                        center: myCenter,
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var mapProp2 = {
                        center: myCenter2,
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var mapProp3 = {
                        center: myCenter3,
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    var map2 = new google.maps.Map(document.getElementById("googleMap2"), mapProp2);
                    var map3 = new google.maps.Map(document.getElementById("googleMap3"), mapProp3);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                    });
                    var marker2 = new google.maps.Marker({
                        position: myCenter2,
                    });
                    var marker3 = new google.maps.Marker({
                        position: myCenter3,
                    });

                    marker.setMap(map);
                    marker2.setMap(map2);
                    marker3.setMap(map3);

                    var infowindow = new google.maps.InfoWindow({
                        content: "4F Saigon Finance Center 9 Dinh Tien Hoang Street, District 1, HCMC" 
                    });
                    var infowindow2 = new google.maps.InfoWindow({
                        content: "4F Saigon Finance Center 9 Dinh Tien Hoang Street, District 1, HCMC" 
                    });
                    var infowindow3 = new google.maps.InfoWindow({
                        content: "4F Saigon Finance Center 9 Dinh Tien Hoang Street, District 1, HCMC" 
                    });
                    
                    infowindow.open(map, marker);
                    infowindow2.open(map2, marker2);
                    infowindow3.open(map3, marker3);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            });
        </script>
    </body>
</html>
