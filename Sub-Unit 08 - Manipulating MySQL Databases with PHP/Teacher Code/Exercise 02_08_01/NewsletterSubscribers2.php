<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: NewsletterSubscribers2.php
    -->
    <title>Newsletter Subscribers 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Newsletter Subscribers 2</h2>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $DBName = "newsletter";
    $tablename = "subscribers";
    $DBConnect = mysqli_connect($hostname, $username, $password);
    if (!$DBConnect) {
        echo "<p>Connection error: " . mysqli_connect_error() . "</p>\n";
    }
    else {
        if (mysqli_select_db($DBConnect, $DBName)) {
            echo "<p>Successfully selected the \"$DBName\" database.</p>\n";
            $sql = "SELECT * FROM $tablename";
            $result = mysqli_query($DBConnect, $sql);
            echo "<p>Number of rows in <strong>$tablename</strong>: " . mysqli_num_rows($result) . ".</p>\n";
            echo "<table width='100%' border='1'>\n";
            echo "<tr><th>Subscriber ID</th>" . "<th>Name</th>" . "<th>Email</th>" . "<th>Subscriber Date</th>" . "<th>Confirm Date</th></tr>\n";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $field) {
                    echo "<td>{$field}</td>";
                }
                echo "<tr>\n";
            }
            echo "</table>\n";
            mysqli_free_result($result);
        }
        else {
            echo "<p>Could not select the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
        }
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
