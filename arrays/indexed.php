<?php 
    $peopleOne = ['red', 'blue', 'yellow'];
    // echo $peopleOne[0];
    // echo $peopleOne[1];

    $peopleTwo = array('green', 'gray');
    echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    // print_r($ages); // print readable

    // OVERRIDE ARRAY VALUES
    $ages[1] = 26;
    // print_r($ages);

    // TO ADD VALUE IN THE ARRAY
    $ages[] = 100; // ADD ELEMENT TO THE END SIMILAR TO PUSH METHOD
    // print_r($ages);

    array_push($ages, 70);
    // print_r($ages);


    // LENGTH OF THE ARRAY
    // echo count($ages);

    // MERGE THE ARRAY
    $peopleThree = array_merge($peopleOne, $ages);
    print_r($peopleThree);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed arrays</title>
</head>
<body>
    
</body>
</html>