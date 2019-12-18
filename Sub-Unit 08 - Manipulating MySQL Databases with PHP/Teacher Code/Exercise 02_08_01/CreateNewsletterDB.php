<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: CreateNewsletterDB.php
    -->
    <title>Create Newsletter DB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Create Newsletter DB</h2>
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
        $sql = "CREATE DATABASE $DBName";
        if (mysqli_query($DBConnect, $sql)) {
           echo "<p>Successfully created the \"$DBName\" database.</p>\n";
        }
        else {
             echo "<p>Could not create the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
        }
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
