<!doctype html>

<html>

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   September 3, 2017

      Filename: ComparisonExamples.php
    -->
    <title>Comparison Examples</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    echo "<p>";
    echo "<h2>Relational Equal Operator</h2>";
    $value1 = "First text string";
    $value2 = "Second text string";
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 == $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Equal Operator</h2>";
    $value1 = 50;
    $value2 = 75;
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 == $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Not Equal Operator</h2>";
    $returnValue = ($value1 != $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 != $value2 $returnValue is: ', $returnValue, "<br>";

     echo "<h2>Relational Alternative Not Equal Operator</h2>";
    $returnValue = ($value1 <> $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 <> $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Greater Than Operator</h2>";
    $returnValue = ($value1 > $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 > $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Less Than Operator</h2>";
    $returnValue = ($value1 < $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 < $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Greater Than or Equal Operator</h2>";
    $returnValue = ($value1 >= $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 >= $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Less Than or Equal Operator</h2>";
    $returnValue = ($value1 <= $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 <= $value2 $returnValue is: ', $returnValue, "<br>";
 
    echo "<h2>Relational Equal Values and Same Data Type Operator</h2>";
    $value1 = 25;
    $value2 = 25;
    $returnValue = ($value1 === $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 === $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>Relational Equal Values and Not Same Data Type Operator</h2>";
    $returnValue = ($value1 !== $value2 ? "true" : "false");
    echo '$value1: ', $value1, ' $value2: ', $value2, '<br>';
    echo 'After $value1 !== $value2 $returnValue is: ', $returnValue, "<br>";

    echo "<h2>The gettype() Function</h2>";
    echo 'After gettype($returnValue) call: ', gettype($returnValue), "</p>";
    ?>
</body>

</html>
