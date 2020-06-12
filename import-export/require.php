<?php 
    // require('person.php');
    // require 'person.php';

    // require('persons.php');

    // if the file name doesn't exist the rest of the code below will not be execute because of require it will return fatal error

    echo 'end of php from require';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require method</title>
</head>
<body>
    <?php require 'content.php'; ?>
    <?php require 'content.php'; ?>
    <?php require 'content.php'; ?>
</body>
</html>