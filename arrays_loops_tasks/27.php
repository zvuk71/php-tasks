<?php
$rows = 5;
$cols = 4;
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

$table = '<table border="1">';

for($tr=1; $tr<=$rows; $tr++) {
     $table .= '<tr>';
    for($td = 1; $td <= $cols; $td++){
         $table .= '<td style="background-color:'.$colors[rand(0, 6)].';">' . $x = rand(0,9999); . '</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;
