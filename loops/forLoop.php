<?php 
    $peoples = ['levi', 'mikasa', 'norrico'];

    // for($i = 0; $i < count($peoples); $i++) {
    //     echo $people[$i] . '<br />';
    // }

    // foreach($peoples as $people) {
    //     echo $people . '<br />';
    // }

    // MULTIDIMENSIONAL ARRAY
    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    foreach($products as $product) {
        if ($product['price'] > 20) { 
            echo $product['name'] . ' - ' . $product['price'];
            echo '<br />';
        }
    }
?>