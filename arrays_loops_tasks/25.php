<?php
// 1й вариант
$array = array(); 
$n = 7; // quantity of array elements
for ($i = 1; $i <= $n; $i++)
{
    $array[] = rand(1, 100);
}
print_r($array);

list($array[0], $array[$n-1]) = array($array[$n-1], $array[0]);
print_r($array);

?>

<?php
// 2й вариант через буфер
$array = array(); 
$n = 5; // quantity of array elements

for ($i = 1; $i <= $n; $i++)
{
    $array[] = rand(1, 100);
}
print_r($array);

$x = $array[0];
$array[0] = $array[$n-1];
$array[$n-1] = $x;

print_r($array);