<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: MySQLInfo.php
    -->
    <title>MySQLInfo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>MySQL Database Server Information</h2>
    <?php
    echo "<p>MySQL client version: " . mysqli_get_client_info() . "</p>\n";
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $DBConnect = mysqli_connect($hostname, $username, $password);
    if (!$DBConnect) {
        echo "<p>Connection failed.</p>\n";
    }
    else {
        echo "<p>Connection successful.</p>\n";
        echo "<p>MySQL connection: " . mysqli_get_host_info($DBConnect) . "</p>\n";
        echo "<p>MySQL protocol version: " . mysqli_get_proto_info($DBConnect) . "</p>\n";
        echo "<p>MySQL server version: " . mysqli_get_server_info($DBConnect) . "</p>\n";
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
