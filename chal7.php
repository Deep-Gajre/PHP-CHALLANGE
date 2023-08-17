<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challange 7</title>
</head>
<body>
<?php 
    $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", 
    "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

    sort($city);

    foreach($city as $value){
        echo $value.", ";
    }

    echo "<br>";

    $city1 = array("Los Angeles", "Calcutta", "Osaka", "Beijing");

    $city = array_merge($city,$city1);

    sort($city);

    foreach($city as $value){
        echo $value.", ";
    }
?>
</body>
</html>