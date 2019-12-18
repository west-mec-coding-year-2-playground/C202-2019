<!doctype html>

<html>

<head>
    <!--
      Exercise 02_04_01

      Author: Mark J. Buckler
      Date:   October 8, 2017

      Filename: Superglobals.php
    -->
    <title>Superglobals</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Superglobals</h2>
    <?php
    echo "<h3>Superglobal Array \$_SERVER[]</h3>";
    echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "<br>";
    echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br>";
    echo "This script was requested with the following server protocol: ", $_SERVER["SERVER_PROTOCOL"], "<br>";
    echo "This script is running on the following server name: ", $_SERVER["SERVER_NAME"], "<br>";
    echo "This script is running on the following server address: ", $_SERVER["SERVER_ADDR"], "<br>";
    echo "This script is running with the following gateway interface: ", $_SERVER["GATEWAY_INTERFACE"], "<br>";
    echo "This script is running with the following request method: ", $_SERVER["REQUEST_METHOD"], "<p>";
    
    foreach ($_SESSION as $key => $value) {
        echo "\$_SESSION[$key] = $value<br>";
    }
    ?>
</body>

</html>
