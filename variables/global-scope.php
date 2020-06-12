<?php 
    $name = 'gerald';

    // function sayHello() {
    //     global $name;
    //     $name = 'norrico'; // this name variable will global scope
    //     echo "hello $name"; // without global it return undefined because it will looking for a local variable inside a function
    // }

    // sayHello();
    // echo $name;

    function sayBye(&$name) { // add & sign to the beginning to be the parameter a global scope
        $name = 'norrico';
        echo "bye $name";
    }

    sayBye($name);
    echo $name;
?>