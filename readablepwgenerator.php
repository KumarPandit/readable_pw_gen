<?php
$dictionary_file='dictionaries/friendly_words.txt';
$lines= file($dictionary_file,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo $lines[0] . "<br />";
echo $lines[1] . "<br />";
?>