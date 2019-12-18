<!doctype html>

<html>

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   September 3, 2017

      Filename: AssignmentOperators.php
    -->
    <title>Assignment Operators</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    echo "<p>";
    // Compound Addition Assignment
    echo "<h2>Compound Addition Assignment</h2>";
    $changingVar = 100;
    $changingVar += 50;
    echo '$changingVar = 100<br>';
    echo 'After $changingVar += 50: ', $changingVar, "<br>";
 
    // Compound Subtraction Assignment
    echo "<h2>Compound Subtraction Assignment</h2>";
    $changingVar -= 30;
    echo 'After $changingVar -= 30: ', $changingVar, "<br>";
    
    // Compound Division Assignment
    echo "<h2>Compound Division Assignment</h2>";
    $changingVar /= 3;
    echo 'After $changingVar /= 3;: ', $changingVar, "<br>";

    // Compound Multiplication Assignment
    echo "<h2>Compound Multiplication Assignment</h2>";
    $changingVar *= 8;
    echo 'After $changingVar *= 8: ', $changingVar, "<br>";

    // Compound Modulus Assignment
    echo "<h2>Compound Modulus Assignment</h2>";
    $changingVar %= 300;
    echo 'After $changingVar %= 300: ', $changingVar, "<br>";

    // Compound Concatenation Assignment
    echo "<h2>Compound Modulus Assignment</h2>";
    $changingVar = "Those who do not remember the past are condemned to repeat it.";
    $changingVar .= ' - Santayana';
    echo '$changingVar = Those who do not remember the past are condemned to repeat it.<br>';
    echo 'After $changingVar .= " - Santayana": ', $changingVar, "</p>";
    ?>
</body>

</html>
