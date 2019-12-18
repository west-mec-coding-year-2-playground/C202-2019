<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 24, 2017

      Filename: WordPlay2.php
    -->
    <title>Word Play 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Word Play 2</h2>
    <?php
    $startingText = "mAdAm, i'M aDaM.";
    $uppercaseText = strtoupper($startingText);
    $lowercaseText = strtolower($startingText);
    echo "<p>$uppercaseText</p>\n";
    echo "<p>$lowercaseText</p>\n";
    
    echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
    echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
    $workingText = ucwords($lowercaseText);
    echo "<p>$workingText</p>\n";
    
    echo "<p>" . md5($workingText) . "</p>\n";
    echo "<p>" . substr($workingText, 0, 6) . "</p>\n";
    echo "<p>" . substr($workingText, 7) . "</p>\n";
    echo "<p>" . strrev($workingText) . "</p>\n";
    echo "<p>" . str_shuffle($workingText) . "</p>\n";
    ?>
</body>

</html>
