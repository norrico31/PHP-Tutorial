<?php 
    // include('person.php');
    // include 'person.php';

    include('persons.php');

    // if the file name doesn't exist the rest of the code will be executed because of include
    
    echo 'end of php from include';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include method</title>
</head>
<body>
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>
</body>
</html>