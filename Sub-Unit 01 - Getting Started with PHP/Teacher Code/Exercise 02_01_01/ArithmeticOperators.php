<!doctype html>

<html>

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   September 3, 2017

      Filename: ArithmeticOperators.php
    -->
    <title>Arithmetic Operators</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    // Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo "<h2>Addition</h2>";
    echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";
 
    // Subtraction
    $x = 10;
    $y = 7;
    $returnValue = $x - $y;
    echo "<h2>Subtraction</h2>";
    echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";
 
    // Multiplication
    $x = 2;
    $y = 6;
    $returnValue = $x * $y;
    echo "<h2>Multiplication</h2>";
    echo '<p>$returnValue after multiplication expression: ', $returnValue, "</p>";

    // Division
    $x = 24;
    $y = 3;
    $returnValue = $x / $y;
    echo "<h2>Division</h2>";
    echo '<p>$returnValue after division expression: ', $returnValue, "</p>";
 
    // Modulus
    $x = 3;
    $y = 2;
    $returnValue = $x % $y;
    echo "<h2>Modulus</h2>";
    echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";
    
    echo "<h2>Unary Increment: Prefix Notation</h2>";
    $studentID = 100;
    $curStudentID = ++$studentID;
    echo "The first student ID is: ", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The second student ID is: ", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The third student ID is: ", $curStudentID, "<br>";

    echo "<h2>Unary Increment: Postfix Notation</h2>";
    $studentID = 100;
    $curStudentID = $studentID++;
    echo "The first student ID is: ", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The second student ID is: ", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The third student ID is: ", $curStudentID, "<br>";
    ?>
</body>

</html>
