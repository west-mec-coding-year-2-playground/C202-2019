<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 23, 2017

      Filename: TempConversion.php
    -->
    <title>Temp Conversion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Temp Conversion</h1>
    <?php
    $tempFahrenheit = 0;
    while ($tempFahrenheit <= 100) {
        $tempCelsius = ($tempFahrenheit - 32) * (5/9);
        echo "Fahrenheit: $tempFahrenheit Celsius: " . number_format($tempCelsius, 2) . "<br>";
        ++$tempFahrenheit;
    }
    ?>
</body>

</html>
