<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   October 21, 2017

      Filename: ViewFiles.php
    -->
    <title>View Files</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>View Files</h2>
    <?php
    $dir = "../Exercise 02_01_01";
    $openDir = opendir($dir);
    while ($curFile = readdir($openDir)) {
        if (strcmp($curFile, '.') !== 0 && strcmp($curFile, '..') !== 0) {
             echo "<a href=\"$dir/$curFile\">$curFile</a><br>\n";
        }
    }
    closedir($openDir);
    ?>
</body>

</html>
