<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: SelectTest.php
    -->
    <title>Select Test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Select Test</h2>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $DBName = "newsletter";
    $DBConnect = mysqli_connect($hostname, $username, $password);
    if (!$DBConnect) {
        echo "<p>Connection error: " . mysqli_connect_error() . "</p>\n";
    }
    else {
        if (mysqli_select_db($DBConnect, $DBName)) {
           echo "<p>Successfully selected the \"$DBName\" database.</p>\n";
        }
        else {
             echo "<p>Could not select the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
        }
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
