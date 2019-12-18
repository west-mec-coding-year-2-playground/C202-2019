<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 16, 2017

      Filename: DiceRoll9.php
    -->
    <title>Dice Roll 9</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll 9</h2>
    <?php
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    $faceValues = array(1, 2, 3, 4, 5, 6);
    $doublesCount = 0;
    $rollNumber = 1;
    
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
        switch ($score) {
            case 2:
                echo "You rolled snake eyes!<br>";
                break;
            case 3:
                echo "You rolled a loose deuce!<br>";
                break;
            case 5:
                echo "You rolled a fever five!<br>";
                break;
            case 7:
                echo "You rolled a natural!<br>";
                break;
            case 9:
                echo "You rolled a nina!<br>";
                break;
            case 11:
                echo "You rolled a yo!<br>";
                break;
            case 12:
                echo "You rolled boxcars!<br>";
                break;
            default: 
                echo "Your roll has no nickname!<br>";
                break;
        }
    }
    
    $rollCount = 0;
    $scoreCount = array();
    for ($possibleRolls = 2; $possibleRolls <= 12; $possibleRolls++) {
       $scoreCount[$possibleRolls] = 0; 
    }
    foreach ($faceValues as $die1) {
        foreach ($faceValues as $die2) {
            ++$rollCount;
            $score = $die1 + $die2;
            ++$scoreCount[$score];
            echo "<p>";
            echo "The total score for the roll $rollCount was $score.<br>";
            $doubles = checkForDoubles($die1, $die2);
            displayScoreText($score, $doubles);
            echo "</p>";
            if ($doubles) {
                ++$doublesCount;
            }
        }
    } 
    echo"<p>Doubles occurred on $doublesCount of the $rollCount rolls.</p>";
    foreach ($scoreCount as $scoreValue => $scoreCount) {
        echo "<p>A combined value of $scoreValue occurred $scoreCount of $rollCount times.</p>";
    }
    ?>
</body>

</html>
