<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challange 10</title>
</head>
<body>
    <?php

    echo "<h2>PHP Version and Configuration</h2>";
    phpinfo(INFO_GENERAL);


    $clientIP = $_SERVER['REMOTE_ADDR'];
    echo "<h2>Client's IP Address</h2>";
    echo "Your IP address is: " . $clientIP;


    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    echo "<h2>Browser Information</h2>";
    echo "Your browser: " . $userAgent;
    ?>
</body>
</html>