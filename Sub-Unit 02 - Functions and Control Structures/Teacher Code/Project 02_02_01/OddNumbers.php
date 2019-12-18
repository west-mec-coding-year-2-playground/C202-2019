<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 23, 2017

      Filename: OddNumbers.php
    -->
    <title>Odd Numbers</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <?php
    $counter = 1;
    while ($counter <= 100) {
        if ($counter % 2 === 1) {
            echo "$counter<br>";
        }
        ++$counter;
    }
    ?>
</body>

</html>
