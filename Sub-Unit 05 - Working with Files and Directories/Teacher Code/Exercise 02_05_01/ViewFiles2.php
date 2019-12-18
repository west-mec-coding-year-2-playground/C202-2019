<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   October 21, 2017

      Filename: ViewFiles2.php
    -->
    <title>View Files 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>View Files 2</h2>
    <?php
    $dir = "../Exercise 02_01_01";
    $dirEntries = scandir($dir);
    foreach ($dirEntries as $entry) {
        if (strcmp($entry, '.') !== 0 && strcmp($entry, '..') !== 0) {
             echo "<a href=\"$dir/$entry\">$entry</a><br>\n";
        }
    }
    ?>
</body>

</html>
