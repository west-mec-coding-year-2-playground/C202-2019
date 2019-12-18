<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 16, 2017

      Filename: DiceRoll4.php
    -->
    <title>Dice Roll 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll 4</h2>
    <?php
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    
    function checkForDoubles($die1, $die2) {
        global $faceNamesSingular;
        global $faceNamesPlural;
        $returnValue = false;
        echo "Die 1: $die1<br>Die 2: $die2<br>";
        if ($die1 === $die2) {
            echo "The roll was double ", $faceNamesPlural[$die1 - 1], ".<br>";
            $returnValue = true;
        }
        else {
            echo "The roll was a  ", $faceNamesSingular[$die1 - 1], " and a ", $faceNamesSingular[$die2 - 1], ".<br>";
            $returnValue = false;
        }
        return $returnValue;
    }
    
    function displayScoreText($score, $doubles) {
        if ($doubles) {
            if ($score === 2) {
                echo "You rolled snake eyes!<br>";
            }
            elseif ($score === 12) {
                echo "You rolled boxcars!<br>";
            }
        }
        else {
            if ($score === 3) {
                echo "You rolled a loose deuce!<br>";
            }
            elseif ($score === 5) {
                echo "You rolled a fever five!<br>";
            }
            elseif ($score === 7) {
                echo "You rolled a natural!<br>";
            }
            elseif ($score === 9) {
                echo "You rolled a nina!<br>";
            }
            elseif ($score === 11) {
                echo "You rolled a yo!<br>";
            }
            else {
                echo "Your roll has no nickname!<br>";
            }
        }
    }
    
    $dice = array();
    $dice[0] = rand(1,6);
    $dice[1] = rand(1,6);
    echo "<p>";
    $score = $dice[0] + $dice[1];
    echo "The total score for the roll was $score.<br>";
    $doubles = checkForDoubles($dice[0], $dice[1]);
    displayScoreText($score, $doubles);
    echo "</p>";
    ?>
</body>

</html>
