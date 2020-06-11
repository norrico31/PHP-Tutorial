<?php 
    // ASSOCIATIVE ARRAYS (KEY & VALUE PAIRS)
    $peopleOne = ['one' => 'red', 'two' => 'blue', 'three' => 'yellow'];
    // echo $peopleOne['three'];
    // print_r($peopleOne);

    $peopleTwo = array('four' => 'green', 'five' => 'pink');
    $peopleTwo['six'] = 'gray';
 
    // OVERRIDE THE VALUE
    $peopleTwo['six'] = 'black';
    // print_r($peopleTwo);
    
    // echo count($peopleOne); // LENGTH OF THE ARRAY

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);
?>