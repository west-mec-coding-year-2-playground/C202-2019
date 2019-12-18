<!doctype html>

<html>

<head>
    <!--
      Project 02_05_01

      Author: Mark J. Buckler
      Date:   November 4, 2017

      Filename: The Game.php
    -->
    <title>The Game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <?php
    $dir = ".";
    $saveFileName = "./TheGamers.txt";
    $saveString = "";
    $dataArray = array();
    function displayAlert($message) {
        echo "<script>alert(\"$message\")</script>";
    }
    if (is_dir($dir)) {
        if (isset($_POST['save'])) {
            if (empty($_POST['userName'])) {
                displayAlert("Unknown Visitor");
            }
            else {
                $dataArray[] = stripslashes($_POST['userName']);
                $dataArray[] = md5(stripslashes($_POST['password']));
                $dataArray[] = stripslashes($_POST['fullName']);
                $dataArray[] = stripslashes($_POST['email']);
                $dataArray[] = stripslashes($_POST['age']);
                $dataArray[] = stripslashes($_POST['screenName']);
                $dataArray[] = stripslashes($_POST['comments']);
//                // debug
//                echo "<pre>\n";
//                print_r($dataArray);
//                echo "</pre>\n";
                $saveString = implode(",", $dataArray);
                $saveString .= "\n";
//                // debug
//                echo "\$saveString = $saveString<br>";
                $fileHandle = fopen($saveFileName, "ab");
                if ($fileHandle === false) {
                    displayAlert("There was an error creating $saveFileName.");
                }
                else {
                    if (flock($fileHandle, LOCK_EX)) {
                        if (fwrite($fileHandle, $saveString) > 0) {
                            displayAlert("Successfully wrote to file $saveFileName.");
                        }
                        else {
                            displayAlert("There was an error writing to $saveFileName.");
                        }
                        flock($fileHandle, LOCK_UN);
                    }
                    else {
                        displayAlert("There was an error locking file $saveFileName for writing.");
                    }
                    fclose($fileHandle);
                }
            }
        }
    }
    ?>
    <h1>Register for The Game</h1>
    <form action="TheGame.php" method="post">
        Username<br> <input type="text" name="userName"><br>
        Password<br> <input type="password" name="password"><br>
        Full Name<br> <input type="text" name="fullName"><br>
        E-mail<br> <input type="email" name="email"><br>
        Age<br> <input type="number" name="age"><br>
        Screen Name<br> <input type="text" name="screenName"><br>
        Comments<br> <textarea name="comments" rows="6" cols="40"></textarea><br>
        <input type="submit" name="save" value="Submit Your Registration"><br>
    </form>
    <?php
    $labels = array("Username",
                    "Password",
                    "Full Name",
                    "E-mail",
                    "Age",
                    "Screen Name",
                    "Comments");
    echo "<hr>";
    echo "<h3>The Gamers</h3>";
    echo "<hr>";
    $fileHandle = fopen($saveFileName, "rb");
    if ($fileHandle === false) {
        displayAlert("There was an error reading file $saveFileName");
    }
    else {
        $saveString = fgets($fileHandle);
        while (!feof($fileHandle)) {
//            echo "\$saveString = $saveString . "<br>\n"; // debug
            $outputArray = explode(",", $saveString);
            foreach ($outputArray as $key => $value) {
                echo "<strong>$labels[$key]:</strong> <em>$value</em><br>";
            }
            echo "<hr>\n";
            $saveString = fgets($fileHandle);
        } 
        fclose($fileHandle);
    }
    ?>
</body>

</html>
