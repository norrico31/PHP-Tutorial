<?php 
    // Loose comparison
    // echo 5 == '5'; // truthy. technically they're not equal to each other because they both have different data type. But, it is using double equal so it will not check the data type. it will only check the value
    // echo 5 === '5'; // falsy. strict equal comparison they are checking if both data type and value is equal to each other
    // echo 5 !== '5'; // truthy 

    echo true == "1"; // truthy because string of 1 in double equal will return truthy
    echo false == ""; // truthy because empty string in double equal will return false
?>