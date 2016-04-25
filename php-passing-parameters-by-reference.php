<?php
function arr_plus(Array & $c)
{
	$c[] = count($c);
	 print_r($c);
}
$c = array(1,2,3,4, 'ovo');

arr_plus($c);