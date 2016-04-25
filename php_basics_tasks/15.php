<?php
echo "<b>Калькулятор</b>:\n\n";

$a = 3;
$b = 8;
$operator = '*';

$sum = "$a $operator $b = ";

switch($operator) {
        case '+':
            $sum .= $a + $b; break;
        case '-':
            $sum .= $a - $b; break;
        case '*':
            $sum .= $a * $b; break;
        case '%':
            $sum .= $a % $b; break;
            
        case '/':
            if ($b == 0) {
                echo "Деление на 0 запрещено!";
            } else {
                $sum .= $a/$b;
			}	
                             break;
		default:
            $sum = "Неизвестный оператор $operator";
}
echo $sum;