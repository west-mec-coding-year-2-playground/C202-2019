<?php
session_start();
//require_once("inc_OnlineStoreDB.php");
require_once("class_OnlineStore.php");
$storeID = "COFFEE";
$storeInfo = array();
if (class_exists("OnlineStore")) {
    if (isset($_SESSION['currentStore'])) {
        echo "Unserializing object.<br>";
        $Store = unserialize($_SESSION['currentStore']);
    }
    else {
        echo "Instantiating new object.<br>";
        $Store = new OnlineStore();
    }
    $Store->setStoreID($storeID);
    $storeInfo = $Store->getStoreInformation();
    if (isset($_GET['ItemToAdd'])) {
        $Store->addItem();
    }
}
else {
    $errorMsgs[] = "The <em>OnlineStore</em> class is not available!";
    $Store = NULL;
}
?>
<!doctype html>

<html>

<head>
    <title>Gourmet Coffee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
    <link rel="stylesheet" type="text/css" 
        href="<?php echo $storeInfo['cssFile']; ?>">
</head>

<body>
    <h1><?php echo htmlentities($storeInfo['name']); ?></h1>
    <h2><?php echo htmlentities($storeInfo['description']); ?></h2>
    <p><?php echo htmlentities($storeInfo['welcome']); ?></p>
    <?php
    $Store->getProductList();
    $_SESSION['currentStore'] = serialize($Store);
//    if ($Store != NULL) {
//        echo "<p>Successfully instantiated an object of the <em>" . 
//            get_class($Store) . "</em> class.</p>\n";
//    }
//    $TableName = "inventory";
//    if (count($errorMsgs) == 0) {
//        $SQLstring = "SELECT * FROM $TableName" . 
//            " WHERE storeID='COFFEE'";
//        $QueryResult = $DBConnect->query($SQLstring);
//        if (!$QueryResult) {
//            $errorMsgs[] = "<p>Unable to perform the query.<br>" . 
//                "Error code " . $DBConnect->errno . ": " . 
//                $DBConnect->error . "</p>\n";
//        }
//        else {
//            echo "<table width='100%'>\n";
//            echo "<tr>\n";
//            echo "<th>Product</th>\n";
//            echo "<th>Description</th>\n";
//            echo "<th>Price Each</th>\n";
//            echo "</tr>\n";
//            while (($row = $QueryResult->fetch_assoc()) != NULL) {
//                echo "<tr><td>" . htmlentities($row['name']) . "</td>\n";
//                echo "<td>" . htmlentities($row['description']) . "</td>\n";
//                printf("<td>$%.2f</td></tr>\n", $row['price']);
//            }
//            echo "</table>\n";
//            $_SESSION['currentStore'] = serialize($Store);
//        }
//    }
//    if (count($errorMsgs)) {
//        foreach ($errorMsgs as $msg) {
//            echo "<p>" . $msg . "</p>\n";
//        }
//    }
    ?>
</body>

</html>
<?php
//if (!$DBConnect->connect_error) {
//    echo "<p>Closing database <em>$DBName</em>.</p>\n";
//    $DBConnect->close();
//}
?>
