<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 30, 2017

      Filename: PHPEmail.php
    -->
    <title>PHP Email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email</h2>
    <?php
    $emailAddresses = array("john.smith@php.test",
                            "mary.smith.mail@php.example",
                            "john.jones@php.invalid",
                            "alan.smithee@test",
                            "jsmith456@example.com",
                            "jsmith456@test",
                            "mjones@example",
                            "mjones@example.net",
                            "jane.a.doe@example.org");
    function validateAddress($address) {
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        }
        else {
            return false;
        }
    }
    foreach ($emailAddresses as $address) {
        if (validateAddress($address) === false) {
            echo "<p>The e-mail address <em>$address</em> does not appear to be valid.</p>";
        }
    }
    ?>
</body>

</html>
