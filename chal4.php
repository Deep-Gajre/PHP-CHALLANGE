<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challange 4</title>
</head>
<body>
<?php
    $month = date("F");
    
    if($month == "June" || $month == "July" || $month == "August"){
        echo "Current Season is Summer.";
    }elseif($month == "September" || $month == "October" || $month == "November" ){
        echo "Current Season is Fall.";
    }elseif($month == "December" || $month == "January" || $month == "February"){
        echo "Current Season is Winter";
    }else{
        echo "Current Season is Spring";
    }

?>
</body>
</html>