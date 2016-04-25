<?php
$result = '';

foreach(array (1, 20, 15, 17, 24, 35) as $val) {
    $result += $val;
}
echo "Сумма = $result.";
?>


<?php
// Более длинно:
$result = '';
$dnd = array(1, 20, 15, 17, 24, 35);

foreach($dnd as $val) {
    $result += $val;
}
echo "Сумма (result) = $result.";
?>

<?php 
// Решение через array_sum:
$result = array(1, 20, 15, 17, 24, 35); 

echo "Сумма (dnd) = ". array_sum($result);
