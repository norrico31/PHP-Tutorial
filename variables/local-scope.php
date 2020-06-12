<?php 
    function myFunc() {
        $price = 10;
        echo $price;
    }
    myFunc();
    echo $price;// cannot access local variable

    function myFuncTwo($age) {
        echo $age;
    }
    myFuncTwo(26);
    echo age; // cannot access local variable
?>