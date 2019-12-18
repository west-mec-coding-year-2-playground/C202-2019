<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 30, 2017

      Filename: PasswordFields2.php
    -->
    <title>Password Fields 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Password Fields 2</h2>
    <?php
    $record = "jdoe:8W4dSO3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash";
    $passwordFields = array("login name",
                            "optional encrypted password",
                            "numerical user ID",
                            "numerical group ID",
                            "user name or comment field",
                            "user home directory",
                            "optional user command interpreter");
    $fieldIndex = 0;
    $extraFields = 0;
    $fields = explode(":", $record);
    foreach ($fields as $fieldIndex => $fieldValue) {
        if ($fieldIndex < count($passwordFields)) {
            echo "<p>The {$passwordFields[$fieldIndex]} is <em>$fieldValue</em></p>\n";
        }
        else {
            ++$extraFields;
            echo "<p>Extra field # $extraFields is <em>$fieldValue</em></p>\n";
        }
    }
    ?>
</body>

</html>
