<?php

function searchPattern($text, $pattern) {
    if (preg_match("/$pattern/", $text)) {
        echo "<br>Pattern '$pattern' found in the text. :)";
    } else {
        echo "<br>Pattern '$pattern' not found in the text. :(";
    }
}

$text = "You can't solve a problem on the same level it is created. You have to rise above it to the next level!!";
$patternToSearch = "level!!$";

echo "Original Text:<br>" .$text. "<br>"; 

searchPattern($text, $patternToSearch);

?>