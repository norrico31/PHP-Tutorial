<?php 
    function formatProduct($product) {
        // echo "{$product['name']} costs $ {$product['price']} to buy <br />";

        return "{$product['name']} costs $ {$product['price']} to buy <br />";
    }

    $formatted = formatProduct(['name' => 'gas', 'price' => 20]);

    echo $formatted;
?>