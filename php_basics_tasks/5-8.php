<?php
$age = 3535;

if($age >= 18 && $age <= 59) {
echo 'Вам ещё работать и работать.'; 
}

if($age > 59) {
echo 'Вам пора на пенсию.'; 
}

if($age <= 17 and $age >= 0 and is_string($age) == false) {
echo 'Вам ещё рано работать.'; 
}

if (is_string($age) or (int)$age < 0) {
echo 'Неизвестный возраст.'; 
}
