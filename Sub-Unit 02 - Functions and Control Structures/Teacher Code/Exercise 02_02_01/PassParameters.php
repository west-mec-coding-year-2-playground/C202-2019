<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 10, 2017

      Filename: PassParameters.php
    -->
    <title>Passing Parameters</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passing Parameters</h2>
    <?php
    function incrementByValue($countByValue) {
        ++$countByValue;
        echo "<p>incrementByValue() value is $countByValue.</p>";
    }

    function incrementByReference(&$countByReference) {
        ++$countByReference;
        echo "<p>incrementByReference() value is $countByReference.</p>";
    }
    
    // main program
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByValue($count);
    echo "<p>Main program after incrementByValue() value is $count.</p>";
    
    incrementByReference($count);
    echo "<p>Main program after incrementByReference() value is $count.</p>";
    ?>
    
    <?php
    echo "<h2>Default Arguments</h2>";
    function paint($room="office", $color="red") {
        return "<p>The color of the {$room} is {$color}.</p>";
    }
    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    ?>
</body>

</html>
