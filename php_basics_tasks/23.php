<?php
$a = 1;

echo "$a\n";

print "$a\n";

$a = array('a' => 'apple', 'b' => array ('x', 'y', 'z'));
print_r($a);
echo "\n";

function hello() {
  $message = "Hello! How are you feeling today?";
  return $message;
}