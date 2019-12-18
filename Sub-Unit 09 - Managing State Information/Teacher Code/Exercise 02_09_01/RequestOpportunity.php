<?php
session_start();
$body = "";
$errors = 0;
//$internID = 0;
//if (isset($_GET['internID'])) {
//    $internID = $_GET['internID'];
//}
//else {
if (!isset($_SESSION['internID'])) {
    ++$errors;
    $body .= "<p>You have not logged in or registered." . 
        " Please return to the " . 
        " <a href='InternLogin.php'>" . 
        "Registration / Login Page</a>.</p>";
}
if ($errors == 0) {
    if (isset($_GET['opportunityID'])) {
        $opportunityID = $_GET['opportunityID'];
    }
    else {
        ++$errors;
        $body .= "<p>You have not selected an opportunity." . 
            " Please return to the " . 
            " <a href='AvailableOpportunities.php?" . 
            "PHPSESSID=" . session_id() . "'>" . 
            "Opportunities Page</a>.</p>";
    }
}
$hostname = "localhost";
$username = "root";
$passwd = "";
$DBConnect = false;
$DBName = "internships";
if ($errors == 0) {
    $DBConnect = mysqli_connect($hostname, $username, $passwd);
    if (!$DBConnect) {
        ++$errors;
        echo "<p>Unable to connect to the database server error code: " . mysqli_connect_error() . "</p>\n";
    }
    else {
        $result = mysqli_select_db($DBConnect, $DBName);
        if (!$result) {
            ++$errors;
            echo "<p>Unable to select the database \"$DBName\" error code: " . mysqli_error($DBConnect) . "</p>\n";
        }
    }
}
$displayDate = date("l, F j, Y, g:i A");
$dbDate = date("Y-m-d H:i:s");
if ($errors == 0) {
    $TableName = "assigned_opportunities";
    $SQLstring = "INSERT INTO $TableName" . 
        " (opportunityID, internID, date_selected)" . 
        " VALUES ($opportunityID, " . 
        $_SESSION['internID'] . ", '$dbDate')";
    $queryResult = mysqli_query($DBConnect, $SQLstring);
    if (!$queryResult) {
        ++$errors;
        $body .= "<p>Unable to execute the query, " . 
            "error code: " . mysqli_errno($DBConnect) . ": " . 
            mysqli_error($DBConnect) . "</p>\n";
    }
    else {
        $body .= "<p>Your results for opportunity #" . 
            " $opportunityID have been entered on" . 
            " $displayDate.</p>\n";
    }
}
if ($DBConnect) {
    echo "<p>Closing database \"$DBName\" connection.</p>\n";
    mysqli_close($DBConnect);
}
if ($_SESSION['internID'] > 0) {
    $body .= "<p>Return to the " . 
        "<a href='AvailableOpportunities.php?" . 
        "PHPSESSID=" . session_id() . "'>" . 
        "Available Opportunities</a> page.</p>\n";
}
else {
    $body .= "<p>Please " . 
        "<a href='InternLogin.php'>" . 
        "Register or Log In" . 
        "</a> to use this page.</p>\n";
}
if ($errors == 0) {
    echo "Setting cookie<br>";
    setcookie("LastRequestDate", 
             urlencode($displayDate), 
             time()+60*60*24*7);
}
?>
<!doctype html>

<html>

<head>
    <title>Request Opportunity</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>College Internship</h1>
    <h2>Opportunity Requested</h2>
    <?php
    echo $body;
    ?>
</body>

</html>
