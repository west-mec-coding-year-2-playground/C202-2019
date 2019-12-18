<!doctype html>

<html>

<head>
    <!--
      Exercise 02_02_01

      Author: Mark J. Buckler
      Date:   September 16, 2017

      Filename: DiceRoll8.php
    -->
    <title>Dice Roll 8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll 8</h2>
    <?php
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
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
    
    $dice = array();
    for ($rollNumber = 1; $rollNumber <= 5; $rollNumber++) {
        $dice[0] = rand(1,6);
        $dice[1] = rand(1,6);
        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the roll was $score.<br>";
        $doubles = checkForDoubles($dice[0], $dice[1]);
        displayScoreText($score, $doubles);
        echo "</p>";
        if ($doubles) {
            ++$doublesCount;
        }
    } 
    echo"<p>Doubles occurred on $doublesCount of the five rolls.</p>";
    ?>
</body>

</html>
