<!doctype html>

<html>

<head>
    <!--
      Project 02_08_01

      Author: Mark J. Buckler
      Date:   December 9, 2017

      Filename: SignGuestBook.php
    -->
    <title>SignGuestBook.php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Sign Guest Book</h1>
    <?php
    function connectToDB($hostname, $username, $password) {
        $DBConnect = mysqli_connect($hostname, $username, 
            $password);
        if (!$DBConnect) {
            echo "<p>Connection error: " . mysqli_connect_error() . "</p>\n";
        }
        return $DBConnect;
    }
    
    function selectDB($DBConnect, $DBName) {
        $success = mysqli_select_db($DBConnect, $DBName);
        if ($success) {
//            echo "<p>Successfully selected the \"$DBName\" database.</p>\n";
        }
        else {
//            echo "<p>Could not select the \"$DBName\" database: " . mysqli_error($DBConnect) . ", creating it.</p>\n";
            $sql = "CREATE DATABASE $DBName";
            if (mysqli_query($DBConnect, $sql)) {
//                echo "<p>Successfully created the \"$DBName\" database.</p>\n";
                $success = mysqli_select_db($DBConnect, $DBName);
                if ($success) {
//                    echo "<p>Successfully selected the \"$DBName\" database.</p>\n";
                }
            }
            else {
//                 echo "<p>Could not create the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
            }
        }
        return $success;
    }
    
    function createTable($DBConnect, $tablename) {
        $success = false;
        $sql = "SHOW TABLES LIKE '$tablename'";
        $result = mysqli_query($DBConnect, $sql);
        if (mysqli_num_rows($result) === 0) {
//            echo "The <strong>$tablename</strong> table does not exist, creating table.<br>\n";
            $sql = "CREATE TABLE $tablename (countID SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY, lastName VARCHAR(40), firstName VARCHAR(40))";
            $result = mysqli_query($DBConnect, $sql);
            if ($result === false) {
                $success = false;
//                echo "<p>Unable to create the $tablename table.</p>";
//                echo "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
            }
            else {
                $success = true;
//                echo "<p>Successfully created the $tablename table.</p>";
            }
        }
        else {
            $success = true;
//            echo "The $tablename table already exists.<br>\n";
        }
        return $success;
    }
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $DBName = "guestbook";
    $tablename = "visitors";
    $firstName = "";
    $lastName = "";
    $formErrorCount = 0;
    if (isset($_POST['submit'])) {
        $firstName = stripslashes($_POST['firstName']);
        $firstName = trim($firstName);
        $lastName = stripslashes($_POST['lastName']);
        $lastName = trim($lastName);
        if (empty($firstName) || empty($lastName)) {
            echo "<p>You must enter your first and last <strong>name</strong>.</p>\n";
            ++$formErrorCount;
        }
        if ($formErrorCount === 0) {
            $DBConnect = connectToDB($hostname, $username, $password);
            if ($DBConnect) {
                if (selectDB($DBConnect, $DBName)) {
                    if (createTable($DBConnect, $tablename)) {
//                        echo "<p>Connection successful!</p>\n";
                        $sql = "INSERT INTO $tablename VALUES(NULL, '$lastName', '$firstName')";
                        $result = mysqli_query($DBConnect, $sql);
                        if ($result === false) {
//                            echo "<p>Unable to execute the query.</p>";
//                            echo "<p>Error code " . mysqli_errno($DBConnect) . ": " . mysqli_error($DBConnect) . "</p>";
                        }
                        else {
                            echo "<h3>Thank you for signing our guest book!</h3>";
                            $firstName = "";
                            $lastName = "";
                        }
                    }
                }
                mysqli_close($DBConnect);
            }
        }
    }
    ?>
    <form action="SignGuestBook.php" method="post">
        <p><strong>First Name: </strong><br>
        <input type="text" name="firstName" value="<?php echo $firstName; ?>"></p>
        <p><strong>Last Name: </strong><br>
        <input type="text" name="lastName" value="<?php echo $lastName; ?>"></p>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>
    <?php
    $DBConnect = connectToDB($hostname, $username, $password);
    if ($DBConnect) {
        if (selectDB($DBConnect, $DBName)) {
            if (createTable($DBConnect, $tablename)) {
//                echo "<p>Connection successful!</p>\n";
                echo "<h2>Visitors Log</h2>";
                $sql = "SELECT * FROM $tablename";
                $result = mysqli_query($DBConnect, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo "<p>There are no entries in the quest book!</p>";
                }
                else {
                    echo "<table width='60%' border='1'>";
                    echo "<tr>";
                    echo "<th>Visitor</th>";
                    echo "<th>Last Name</th>";
                    echo "<th>First Name</th>";
                    echo "</tr>";
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<tr>";
                        echo "<td width='10%' style='text-align: center'>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                   mysqli_free_result($result);
                }
            }
        }
        mysqli_close($DBConnect);
    }
    ?>
</body>

</html>
