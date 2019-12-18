<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: CreateSubscribersTable.php
    -->
    <title>Create Subscribers Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Create Subscribers Table</h2>
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
            $sql = "SHOW TABLES LIKE '$tablename'";
            $result = mysqli_query($DBConnect, $sql);
            if (mysqli_num_rows($result) === 0) {
                echo "The <strong>$tablename</strong> table does not exist, creating table.<br>\n";
                $sql = "CREATE TABLE subscribers (subscriberID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(80), email VARCHAR(100), subscribe_date DATE, confirmed_date DATE)";
                $result = mysqli_query($DBConnect, $sql);
                if ($result === false) {
                   echo "<p>Unable to create the $tablename table.</p>";
                   echo "<p>Error code: " . mysqli_error($DBConnect) . "</p>";
                }
                else {
                    echo "<p>Successfully created the $tablename table.</p>";
                }
            }
            else {
                echo "The $tablename table already exists.<br>\n";
            }
        }
        else {
            echo "<p>Could not select the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
        }
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
