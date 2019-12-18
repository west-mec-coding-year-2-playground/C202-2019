<?php
$errorMsgs = array();
$hostname = "localhost";
$username = "root";
$passwd = "";
$DBName = "onlinestores";
$DBConnect = @new mysqli($hostname, $username, $passwd, $DBName);
if ($DBConnect->connect_error) {
    $errorMsgs[] = "Unable to connect to the database server." . 
        " Error code " . $DBConnect->connect_errno . 
        ": " . $DBConnect->connect_error ;
}
?>
