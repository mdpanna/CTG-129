<?php

function text_transform($text){
    $uppercase="This is uppercase text= ".strtoupper($text)."</br>";
    $lowercase="This is lowercase text= ".strtolower($text)."</br>";
    $capitalize="This is capitalize text= <span style='text-transform: capitalize;'>".$text."</span></br>";
    echo $uppercase;
    echo $lowercase;
    echo $capitalize;
}

text_transform('what are you doing?');


?>
