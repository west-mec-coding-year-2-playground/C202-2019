<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 24, 2017

      Filename: MusicalScale.php
    -->
    <title>Musical Scale</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Musical Scale</h2>
    <?php
    $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti");
    $outputString = "The notes of the musical scale are: ";
    foreach ($musicalScale as $currentNote) {
        $outputString .= " " . $currentNote;
    }
    echo "<p>$outputString</p>";
    ?>
</body>

</html>
