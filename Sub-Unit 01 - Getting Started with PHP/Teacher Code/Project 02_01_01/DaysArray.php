<!doctype html>

<html>

<head>
    <!--
      Project 02_01_01

      Author: Mark J. Buckler
      Date:   September 9, 2017

      Filename: DaysArray.php
    -->
    <title>Days Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Days Array</h2>
    <?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], and $days[6].</p>";
        
    $days[0] = "Dimanche";
    $days[1] = "Lundi";
    $days[2] = "Mardi";
    $days[3] = "Mercredi";
    $days[4] = "Jeudi";
    $days[5] = "Vendredi";
    $days[6] = "Samedi";
    echo "<p>The days of the week in French are: $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], and $days[6].</p>";
    ?>
</body>

</html>
