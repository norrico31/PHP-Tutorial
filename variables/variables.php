<?php 
    $firstName = 'Norrico';
    $age = 26;

    // override the variable
    // $firstName = 'Gerald';

    // Constants - immutable
    define('NAME', 'Gerald');
    define('NAME', 'Norrico');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1><?php echo $firstName; ?></h1>
    <h3><?php echo $age ?></h3>
    <h2>This is Constants - <?php echo NAME; ?></h2>
</body>
</html>