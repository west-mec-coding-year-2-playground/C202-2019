<!doctype html>

<html>

<head>
    <!--
      Exercise 02_03_01

      Author: Mark J. Buckler
      Date:   September 24, 2017

      Filename: BooksAndAuthors.php
    -->
    <title>Books And Authors</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Books And Authors</h2>
    <?php
    $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
    }
    ?>
</body>

</html>
