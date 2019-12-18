<!doctype html>

<html>

<head>
    <!--
      Project 02_04_01

      Author: Mark J. Buckler
      Date:   October 16, 2017

      Filename: Paycheck.php
    -->
    <title>Process Paycheck</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Process Paycheck</h2>
    <?php
    $errors = 0;
    
    if (is_numeric($_POST['hours'])) {
        if ($_POST['hours'] > 0) {
            $hours = round($_POST['hours'], 2);
            if ($hours > 40) {
                $regularHours = 40;
                $overtimeHours = $hours - 40;
            }
            else {
                $regularHours = $hours;
                $overtimeHours = 0;
            }
        }
        else {
            ++$errors;
            echo "<p>Error: 'Hours Worked' must be greater than 0.<br>";
            echo "Use the \"Back\" button to re-enter data.</p>";
        }
    }
    else {
        ++$errors;
        echo "<p>Error: 'Hours Worked' must be a numeric value.<br>";
        echo "Use the \"Back\" button to re-enter data.</p>";
    }

    if (is_numeric($_POST['wage'])) {
        if ($_POST['wage'] > 0) {
            $wage = round($_POST['wage'], 2);
        }
        else {
            ++$errors;
            echo "<p>Error: 'Hourly Wage' must be greater than 0.<br>";
            echo "Use the \"Back\" button to re-enter data.</p>";
        }
    }
    else {
        ++$errors;
        echo "<p>Error: 'Hourly Wage' must be a numeric value.<br>";
        echo "Use the \"Back\" button to re-enter data.</p>";
    }
    
    if ($errors == 0) {
        echo "<p>$regularHours hours @ \$$wage/hr = \$" . number_format(($regularHours * $wage), 2) . "<br>\n";
        echo "$overtimeHours hours @ \$" . ($wage * 1.5) . "/hr = \$" . number_format(($overtimeHours * $wage * 1.5), 2) . "<br>\n";
        echo "Total for $hours hours is \$" . number_format((($regularHours * $wage) + ($overtimeHours * $wage * 1.5)), 2) . "</p>\n";
        echo "<p><a href=\"Paycheck.html\">Calculate another paycheck</a></p>";
    }
    ?>
</body>

</html>
