<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bing Maps Example</title>
    <link rel="stylesheet" href="e.css">
</head>
<body>
    <div id="map" style="height: 600px;"></div>

    <script>
        function loadMapScenario() {
            const map = new Microsoft.Maps.Map('#map', {
                credentials: 'AtzJtJUDyg8f_Bhdyu9Ms0o67sUfc8KhlWYd7yw5ekJdXs7jNeVOfI1YCDEo5GL_',
                center: new Microsoft.Maps.Location(47.6062, -122.3321), // Default center (Seattle)
                zoom: 12,
            });

            // You can add additional map functionalities or markers here
        }
    </script>
    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=YOUR_BING_MAPS_API_KEY&callback=loadMapScenario' async defer></script>
<div class="click"><p>click on the round button on top right corner and <a href="image.php" target="_parent"> click</a>image</p></div>

</body>
</html>