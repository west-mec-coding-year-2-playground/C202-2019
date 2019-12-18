<!doctype html>

<html>

<head>
    <!--
      Exercise 02_01_01

      Author: Mark J. Buckler
      Date:   August 26, 2017

      Filename: MultipleScripts.php
    -->
    <title>PHP Environment Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Environment Info</h1>
    <p>This page was rendered with PHP version
    <?php
    echo phpversion();
    ?>
    </p>
    <p>The PHP code was rendered with Zend Engine version
    <?php
    echo zend_version();
    ?>
    <p>PHP's default MIME type is
    <?php
    echo ini_get("default_mimetype");
    ?>
    <p>The maximum allowable execution time of a PHP script is
    <?php
    echo ini_get("max_execution_time");
    ?>
    seconds.
    </p>
</body>

</html>
