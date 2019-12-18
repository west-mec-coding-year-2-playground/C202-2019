<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 10, 2017

      Filename: VariableScope.php
    -->
    <title>Variable Scope</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Variable Scope</h2>
    <?php
    $globalVariable = "global variable";
    
    function scopeExample() {
        $localVariable = "local variable";
        echo "<p>This is a $localVariable</p>";
    }
    scopeExample();
    echo "This is a $globalVariable</p>";

    function globalExample() {
        global $globalVariable;
        echo "<p>This is a $globalVariable</p>";
    }
    globalExample();
    ?>
</body>

</html>
