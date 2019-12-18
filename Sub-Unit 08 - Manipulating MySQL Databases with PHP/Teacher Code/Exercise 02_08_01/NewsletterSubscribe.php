<!doctype html>

<html>

<head>
    <!--
      Exercise 02_05_01

      Author: Mark J. Buckler
      Date:   December 2, 2017

      Filename: NewsletterSubscribe.php
    -->
    <title>Newsletter Subscribe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Newsletter Subscribe</h2>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $DBName = "newsletter";
    $tablename = "subscribers";
    $subscriberName = "";
    $subscriberEmail = "";
    $showForm = false;
    if (isset($_POST['submit'])) {
        $formErrorCount = 0;
        if (!empty($_POST['subName'])) {
            $subscriberName = stripslashes($_POST['subName']);
            $subscriberName = trim($subscriberName);
            if (strlen($subscriberName) === 0) {
                echo "<p>You must include your <strong>name</strong></p>\n";
                ++$formErrorCount;
            }
        }
        else {
            echo "<p>Form submittal error, no <strong>Name</strong> field!</p>\n";
            ++$formErrorCount;
        }
        if (!empty($_POST['subEmail'])) {
            $subscriberEmail = stripslashes($_POST['subEmail']);
            $subscriberEmail = trim($subscriberEmail);
            if (strlen($subscriberEmail) === 0) {
                echo "<p>You must include your <strong>email address</strong></p>\n";
                ++$formErrorCount;
            }
        }
        else {
            echo "<p>Form submittal error, no <strong>email</strong> field!</p>\n";
            ++$formErrorCount;
        }
        if ($formErrorCount === 0) {
            $showForm = false;
            $DBConnect = mysqli_connect($hostname, $username, $password);
            if (!$DBConnect) {
                echo "<p>Connection error: " . mysqli_connect_error() . "</p>\n";
            }
            else {
                if (mysqli_select_db($DBConnect, $DBName)) {
                    echo "<p>Successfully selected the \"$DBName\" database.</p>\n";
                    $subscriberDate = date("Y-m-d");
                    $sql = "INSERT INTO $tablename (name, email, subscribe_date) VALUES('$subscriberName', '$subscriberEmail', '$subscriberDate')";
                    $result = mysqli_query($DBConnect, $sql);
                    if ($result === false) {
                        echo "<p>Unable to insert the values into the <strong>$tablename</strong> table.</p>";
                        echo "Error code <strong>" . msqli_errorno($DBConnect) . ": " . mysqli_error($DBConnect) . "</strong></p>";
                    }
                    else {
                        $subscriberID = mysqli_insert_id($DBConnect);
                        echo "<p><strong>" . htmlentities($subscriberName) . "</strong>, you are now subscribed to our newsletter.<br>";
                        echo "Your subscriber ID is <strong>$subscriberID</strong>.<br>";
                        echo "Your email address is <strong>" . htmlentities($subscriberEmail) . "</strong>.</p>";
                    }
                }
                else {
                    echo "<p>Could not select the \"$DBName\" database: " . mysqli_error($DBConnect) . "</p>\n";
                }
                mysqli_close($DBConnect);
            }
        }
        else {
            $showForm = true;
        }
    }
    else {
        $showForm = true;
    }
    if ($showForm) {
    ?>
    <form action="NewsletterSubscribe.php" method="post">
        <p><strong>Your Name: </strong><br>
        <input type="text" name="subName" value="<?php echo $subscriberName; ?>"></p>
        <p><strong>Your Email Address: </strong><br>
        <input type="email" name="subEmail" value="<?php echo $subscriberEmail; ?>"></p>
        <p><input type="submit" name="submit" value="Submit"></p>
    </form>
</body>

</html>
<?php
}
?>
