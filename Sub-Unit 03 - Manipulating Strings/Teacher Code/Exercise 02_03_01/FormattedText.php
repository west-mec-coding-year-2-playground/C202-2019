<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 24, 2017

      Filename: FormattedText.php
    -->
    <title>Formatted Text</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Formatted Text</h2>
    <?php
    $displayValue = 9.876;
    echo "<pre>\n";
    echo "Unformatted text line 1. ";
    echo "Unformatted text line 2. ";
    echo "$displayValue = $displayValue";
    echo "</pre>\n";

    echo "<pre>\n";
    echo "Formatted text line 1. \r\n";
    echo "\tFormatted text line 2. \r\n";
    echo "\$displayValue = $displayValue";
    echo "</pre>\n";
    ?>
</body>

</html>
