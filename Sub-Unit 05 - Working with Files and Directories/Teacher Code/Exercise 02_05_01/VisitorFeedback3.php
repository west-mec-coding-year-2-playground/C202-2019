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
                $comment = file($dir . "/" . $fileName);
                echo "From: " . htmlentities($comment[0]) . "<br>\n";
                echo "Email Address: " . htmlentities($comment[1]) . "<br>\n";
                echo "Date: " . htmlentities($comment[2]) . "<br>\n";
                $commentLines = count($comment);
                for ($i = 3; $i < $commentLines; $i++) {
                    echo htmlentities($comment[$i]) . "<br>\n";
                }
                echo "<hr>\n";
            }
        }
    }
    ?>
</body>

</html>
