<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 24, 2017

      Filename: WordPlay.php
    -->
    <title>Word Play</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Word Play</h2>
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
    ?>
</body>

</html>
