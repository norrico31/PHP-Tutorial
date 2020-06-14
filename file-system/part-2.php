<?php 
    $file = 'quotes.txt';

    // OPENING A FILE FOR READING
    $handle = fopen($file, 'a+');

    // READ THE FILE
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // READ A SINGLE LINE
    // echo fgets($handle);
    // echo fgets($handle);

    // READ A SINGLE CHARACTER
    // echo fgetc($handle);

    // WRITING TO A FILE - TO READ AND WRITE A FILE YOU HAVE TO CHANGE THE fopen 2nd argument and add the plus sign r+ or a+
    fwrite($handle, "\nEverything popular is wrong");

    fclose($handle);


    // DELETE THE FILE
    unlink($file);
?>