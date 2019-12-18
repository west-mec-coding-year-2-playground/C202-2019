<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   October 21, 2017

      Filename: VisitorFeedback2.php
    -->
    <title>Visitor Feedback 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Visitor Feedback 2</h2>
    <hr>
    <?php
    $dir ="./comments";
    if (is_dir($dir)) {
        $commentFiles = scandir($dir);
        foreach ($commentFiles as $fileName) {
            if ($fileName !== "." && $fileName !== "..") {
                echo "From <strong>$fileName</strong><br>";
                echo "<pre>\n";
                readfile($dir . "/" . $fileName);
                echo "</pre>\n";
                echo "<hr>\n";
            }
        }
    }
    ?>
</body>

</html>