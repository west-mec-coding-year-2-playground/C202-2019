<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 10, 2017

      Filename: TwoFunctions.php
    -->
    <title>Two Functions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Two Functions</h2>
    <?php
    function displayMessage($firstMessage) {
        echo "<p>$firstMessage</p>";
    }
 
    function returnMessage() {
        return "<p>This message was returned from a function.</p>";
    }
    
    // main script body
    displayMessage("This message was displayed from within a function.");
    
    $returnValue = returnMessage();
    echo $returnValue;
    ?>
</body>

</html>
