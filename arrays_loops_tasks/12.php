<?php
$num = '';
$n = 1000;

while($n >= 50) {
	$n /= 2;
	$num++;
}
echo "Последнее значение числа n: $n,\n
количество итераций: $num.";