<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 30, 2017

      Filename: Presidents2.php
    -->
    <title>Presidents 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents 2</h2>
    <?php
    $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
    $thisPresident = strtok($presidents, ";");
    while ($thisPresident != NULL) {
        echo "$thisPresident<br>";
        $thisPresident = strtok(";");
    }
 
    $thisPresident = strtok($presidents, "; ");
    while ($thisPresident != NULL) {
        echo "$thisPresident<br>";
        $thisPresident = strtok("; ");
    }
    ?>
</body>

</html>
