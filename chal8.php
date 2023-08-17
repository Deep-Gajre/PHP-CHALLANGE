<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challange 8</title>
</head>
<body>
<?php 
    $height = 4;
    $width = 5;

    function area($x,$y){
        $area = $x * $y ;
        echo "This rectangle is ".$x." inches high and ".$y." inches wide and has an area of ".$area." square inches.";
    }

    area(6,4);
?>
</body>
</html>