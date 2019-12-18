<!doctype html>

<html>

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   September 3, 2017

      Filename: HelloWorld.php
    -->
    <title>Hello World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Central Valley Civic Center</h1>
    <h2>Summer Concert Season</h2>
    <?php
    $concerts = array("Jimmy Buffett", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    $concerts[] = "Bob Dylan";
    $concerts[] = "Ryan Cabrera";
    
    echo "<p>The following ", count($concerts), " concerts are scheduled:</p><p>";
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";
    
    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
    ?>
</body>

</html>
