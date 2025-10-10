<?php
$txt = "Hello World!";
echo strlen($txt);        // Counts characters → 12
echo str_word_count($txt); // Counts words → 2
echo strrev($txt);        // Reverses → !dlroW olleH
echo strpos($txt, "World"); // Finds position of "World" → 6
echo str_replace("World", "PHP", $txt); // Replaces text → Hello PHP!
?>
