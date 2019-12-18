<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 30, 2017

      Filename: PHPEmail4.php
    -->
    <title>PHP Email 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email 4</h2>
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

    function sortAddresses($addresses) {
        $sortedAddresses = array();
        $ilimit = count($addresses)-1;
        $jlimit = count($addresses);
        for ($i = 0; $i < $ilimit; $i++) {
            $currentAddress = $addresses[$i];
            for ($j = $i + 1; $j < $jlimit; $j++) {
                if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                    $tempVal = $addresses[$j];
                    $addresses[$j] = $currentAddress;
                    $currentAddress = $tempVal;
                }
            }
            $sortedAddresses[] = $currentAddress;
        }
        return($sortedAddresses);
    }
    $sortedAddresses = sortAddresses($emailAddresses);
    $sortedAddressList = implode(", ", $sortedAddresses);
    echo "<p>Sorted Addresses: $sortedAddressList</p>\n";

    foreach ($sortedAddresses as $address) {
        if (validateAddress($address) === false) {
            echo "<p>The e-mail address <em>$address</em> does not appear to be valid.</p>";
        }
    }
    ?>
</body>

</html>