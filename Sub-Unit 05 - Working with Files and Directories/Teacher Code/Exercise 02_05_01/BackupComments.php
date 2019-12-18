<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   October 21, 2017

      Filename: BackupComments.php
    -->
    <title>Backup Comments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Backup Comments</h2>
    <?php
    $source = "./comments";
    $destination = "./backups";
    if (!is_dir($destination)) {
        echo "The backup directory \"$destination\" does not exist.\n";
    }
    else {
        if (is_dir($source)) {
            $totalFiles = 0;
            $filesMoved = 0;
            $dirEntries = scandir($source);
            foreach ($dirEntries as $entry) {
                if ($entry !== "." && $entry !== "..") {
                    ++$totalFiles;
                    if (copy("$source/$entry", "$destination/$entry")) {
                        ++$filesMoved;
                    }
                    else {
                        echo "Could not move file \"" . htmlentities($entry) . "\".<br>\n";
                    }
                }
            }
            echo "<p>$filesMoved of $totalFiles files successfully backed up.</p>\n";
        }
        else {
            echo "The source directory \"$source\" does not exist.\n";
        }
    }
    ?>
</body>

</html>
