<!doctype html>

<html>

<head>
   <!--
       Exercise 02_06_01
       
       Author: Mark J. Buckler
       Date:   Sept 22, 2018
       
       Filename: MessageBoard.php
   -->
    <title>Message Board</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Message Board</h1>
    <?php
    if (isset($_GET['action'])) {
        if (file_exists("messages.txt") && filesize("messages.txt") != 0) {
            $messageArray = file("messages.txt");
            switch ($_GET['action']) {
                case 'Delete First':
                    array_shift($messageArray);
                    break;
                case 'Delete Last':
                    array_pop($messageArray);
                    break;
                case 'Delete Message':
                    if (isset($_GET['message'])) {
                        $index = $_GET['message'];
                        unset($messageArray[$index]);
                        $messageArray = array_values($messageArray);
                    }
                    break;
                case 'Remove Duplicates':
                    $messageArray = array_unique($messageArray);
                    $messageArray = array_values($messageArray);
                    break;
                case 'Sort Ascending':
                    sort($messageArray);
                    break;
                case 'Sort Descending':
                    rsort($messageArray);
                    break;
            }
            if (count($messageArray) > 0) {
                $newMessages = implode($messageArray);
                $messagefile = fopen("messages.txt", "wb");
                if ($messagefile === false) {
                    echo "There was an error updating the message file.\n";
                }
                else {
                    fwrite($messagefile, $newMessages);
                    fclose($messagefile);
                }
            }
            else {
                unlink("messages.txt");
            }
        }
    }
    if (!file_exists("messages.txt") || filesize("messages.txt") == 0) {
        echo "<p>There are no messages posted.</p>\n";    }
    else {
        $messageArray = file("messages.txt");
        echo "<table style=\"background-color: lightgray\" border = \"1\" width=\"100%\">\n";
        $count = count($messageArray);
        for ($i = 0; $i < $count; $i++) {
            $currMsg = explode("~", $messageArray[$i]);
            $keyMessageArray[$currMsg[0]] = $currMsg[1] . "~" . $currMsg[2];
        }
        $index = 1;
        $key = key($keyMessageArray);
        foreach ($keyMessageArray as $message) {
            $currMsg = explode("~", $message);
            echo "<tr>\n";
            echo "<td width=\"5%\" style=\"text-align: center; font-weight: bold\">" . $index . "</td>\n";
            echo "<td width=\"85%\"><span style=\"font-weight: bold\">Subject: </span>" . htmlentities($key) . "<br>\n";
            echo "<span style=\"font-weight: bold\">Name: </span>" . htmlentities($currMsg[0]) . "<br>\n";
            echo "<span style=\"text-decoration: underline; font-weight: bold\">Message </span><br>\n" . htmlentities($currMsg[1]) . "</td>\n";
            echo "<td width=\"10%\" style=\"text-align: center\">" . 
                "<a href='MessageBoard.php?" . 
                "action=Delete%20Message&" . 
                "message=" . ($index - 1) . 
                "'>Delete This Message</a></td>\n";
            echo "</tr>\n";
            ++$index;
            next($keyMessageArray);
            $key = key($keyMessageArray);
       }
        echo "</table>\n";
    }
    ?>
    <p>
    <a href="PostMessage.php">Post New Message</a><br>
    <a href="MessageBoard.php?action=Sort%20Ascending">Sort Subjects A-Z</a><br>
    <a href="MessageBoard.php?action=Sort%20Descending">Sort Subjects Z-A</a><br>
    <a href="MessageBoard.php?action=Delete%20First">Delete First Message</a><br>
    <a href="MessageBoard.php?action=Delete%20Last">Delete Last Message</a><br>
    <a href="MessageBoard.php?action=Remove%20Duplicates">Remove Duplicates</a>
    </p>
</body>

</html>
