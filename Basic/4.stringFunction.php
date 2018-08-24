<?PHP

    echo strlen("Rashik Ishrak Nahian"); //This function returns the length of a string.
    echo "<br/>";

    echo str_word_count("Rashik Ishrak Nahian"); //This function counts the number of words in a string
    echo "<br/>"; 

    echo strrev("Rashik Ishrak Nahian");
    echo "<br/>";

    /*The PHP strpos() function searches for a specific text within a string.
    If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
    The example below searches for the text "world" in the string "Hello world!":*/
    echo strpos("Hello World" , "Hello");
    echo "<br>";

    echo str_replace("World","Dhaka","Hello World"); //This function replaces some characters with some other characters in a string.

?>