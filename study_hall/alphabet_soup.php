<?php

// <!-- Create a function alphabet_soup($str) that accepts a string and 
// will return the string in alphabetical order. E.g. "hello world" 
// becomes "ehllo dlorw". So make sure your function separates and alphabetizes 
// each word separately. -->


// <!-- the user will give an  array of words you can than use a foreach to alphabetize 
// each word and array_push each alphabetized version onto a new array then implode that 
// into a string and echo it back out to the user -->


    echo "What words would you like to alphabetize?" . PHP_EOL;
    $user_words_string = trim(fgets(STDIN));
    $user_words_array = explode(" ", $user_words_string);
    $alpha_user_array = [];
    foreach ($user_words_array as $word) {
        //converts $word (a string) into an array
        $new_word_array = str_split($word);
        $word = multisort($new_word_array);
        $alpha_user_array[] = $word;
    }
    $alpha_user_string = implode(" ", $alpha_user_array);
    echo $alpha_user_string . PHP_EOL;
