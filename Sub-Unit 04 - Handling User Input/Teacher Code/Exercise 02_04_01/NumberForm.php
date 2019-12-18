<!doctype html>

<html>

<head>
    <!--
      Exercise 02_04_01

      Author: Mark J. Buckler
      Date:   October 8, 2017

      Filename: NumberForm.php
    -->
    <title>Number Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Number Form</h2>
    <?php
    $displayForm = true;
    $number = "";
    if (isset($_POST['Submit'])) {
        $number = $_POST['number'];
        if (is_numeric($number)) {
            $displayForm = false;
        }
        else {
            echo "<p>You need to enter a numeric value.</p>\n";
            $displayForm = true;
        }
    }
    if ($displayForm) {
    ?>
    <form name="NumberForm" action="NumberForm.php" method="post">
        <p>
            Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
        </p>
        <p>
            <input type="reset" value="Clear Form">&nbsp;&nbsp;
            <input type="submit" name="Submit" value="Send Form">
        </p>
    </form>
    <?php
    }
    else {
        echo "<p>Thank you for entering a number.</p>\n";
        echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
        echo "<p><a href=\"Numberform.php\">Try again?</a></p>\n";
    }
    ?>
</body>

</html>
