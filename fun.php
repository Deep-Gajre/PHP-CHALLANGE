<?php
    $height = intVal($_POST['h']);
    $width = intVal($_POST['w']);

    function area($a,$b){
        $area = $a * $b ;
        echo "<h1>This rectangle is ".$a." inches high and ".$b." inches wide and has an area of ".$area." square inches.</h1>";
    }

    area($height,$width);

?>