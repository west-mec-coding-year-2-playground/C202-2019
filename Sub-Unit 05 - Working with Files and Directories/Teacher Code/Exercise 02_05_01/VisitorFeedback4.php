<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   October 21, 2017

      Filename: VisitorFeedback4.php
    -->
    <title>Visitor Feedback 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Visitor Feedback 4</h2>
    <hr>
    <?php
    $dir ="./comments";
    if (is_dir($dir)) {
        $commentFiles = scandir($dir);
        foreach ($commentFiles as $fileName) {
            if ($fileName !== "." && $fileName !== "..") {
                echo "From <strong>$fileName</strong><br>";
                $fileHandle = fopen($dir . "/" . $fileName, "rb");
                if ($fileHandle === false) {
                    echo "There was an error reading file \"$fileName\".<br>\n";
                }
                else {
                    $from = fgets($fileHandle);
                    echo "From: " . htmlentities($from) . "<br>\n";
                    $email = fgets($fileHandle);
                    echo "Email Address: " . htmlentities($email) . "<br>\n";
                    $date = fgets($fileHandle);
                    echo "Date: " . htmlentities($date) . "<br>\n";
                    $comment = "";
                    while (!feof($fileHandle)) {
                        $comment .= fgets($fileHandle);
                    }
                    echo htmlentities($comment) . "<br>\n";
                    echo "<hr>\n";
                    fclose($fileHandle);
                }
            }
        }
    }
    ?>
</body>

</html>
