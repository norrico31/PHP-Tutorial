<?php 
    $blogs = [
        ['norrico', 'gusion', 26],
        ['levi', 'fanny', 20],
        ['biason', 'assassin', 30]
    ];

    print_r($blogs[0][2]);

    // ASSOCIATIVE ARRAY
    $blogsTwo = [
        ['name' => 'norrico', 'hero' => 'gusion', 'age' => 26],
        ['name' => 'levi', 'hero' => 'fanny', 'age' => 20],
        ['name' => 'biason', 'hero' => 'assassin', 'age' => 30]
    ];

    echo $blogsTwo[1]['name'];
    // echo count($blogsTwo);

    $blogsTwo[] = ['name' => 'mikasa', 'hero' => 'fanny', 'age' => 18];
    // echo $blogsTwo[3]['name'];

    $popped = array_pop($blogs);
    print_r($popped);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional</title>
</head>
<body>
    
</body>
</html>