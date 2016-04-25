<?php

$result = '';

foreach(array(26, 17, 136, 12, 79, 15) as $val) {
    $result += $val**2;
}
echo "Сумма квадратов (result) = $result.";

?>