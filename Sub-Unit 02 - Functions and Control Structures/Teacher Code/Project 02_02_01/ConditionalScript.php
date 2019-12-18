<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 23, 2017

      Filename: ConditionalScript.php
    -->
    <title>Conditional Script</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Conditional Script</h2>
    <?php
    $intVariable = 75;
    $result = "";
//    ($intVariable > 100) ? $result = '$intVariable is greater than 100' : $result = '$intVariable is less than or equal to 100';
    if ($intVariable > 100) {
       $result = '$intVariable is greater than 100'; 
    }
    else {
       $result = '$intVariable is less than or equal to 100'; 
    }
    echo '<h3>$result: ' . "$result</h3>";
    ?>
</body>

</html>
