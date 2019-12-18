<!DOCTYPE html>
<html lang="en">

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   August 26, 2017

      Filename: PHPCodeBlocks.php
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PHP Code Blocks</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <p>
    <?php
        echo "This text is displayed using standard PHP
        script delimiters.<br>";
        print "Second string<br>";
        print("Third string<br>");
        echo "<h1>This is a" , " multiple argument string.</h1>";
        echo("<h1>This is a" . " concatenated argument string.</h1>");
        print("<h2>This is some math: " . (2 + 3) . "</h2>");
    ?>
    </p>
</body>

</html>
