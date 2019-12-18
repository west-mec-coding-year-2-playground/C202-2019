<!doctype html>

<html>

<head>
    <!--
      Exercise 02_04_01

      Author: Mark J. Buckler
      Date:   October 8, 2017

      Filename: Process_Scholarship.php
    -->
    <title>Process Scholarship</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Scholarship</h2>
    <?php
    $firstName = stripslashes($_POST['fName']);
    $lastName = stripslashes($_POST['lName']);
    echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
    ?>
</body>

</html>
