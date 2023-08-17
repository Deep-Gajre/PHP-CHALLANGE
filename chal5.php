<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challange 5</title>
</head>
<body>
<table border="1px">
    <?php
    for($i = 1; $i<=12; $i++){
    ?>
    <?php
        for($j = 1; $j<=10; $j++){
    ?>
            <tr>
                <td><?php echo $i." * ".$j." = ".$i*$j ?></td>
            </tr>
    <?php } ?>
    
    <?php } ?>
</table>
</body>
</html>