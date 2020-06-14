<?php 
    // $quotes = readfile('dummy-text/readme.txt');
    // echo $quotes;

    $file = 'dummy-text/readme.txt';
    if (file_exists($file)) {
        // echo readfile($file) . '<br />';

        // COPY THE FILE
        // copy($file, 'quotes.txt'); // once this saved and run in the browser it will create quotes.txt file

        // ABSOLUTE PATH
        // echo realpath($file) . '<br />';

        // FILE SIZE
        // echo filesize($file) . '<br />';

        // RENAME THE FILE
        // rename($file, 'readmeRenamed.txt');


    } else {
        echo 'file does not exist';
    }

    // make directory / folder
    mkdir('quotes');
?>