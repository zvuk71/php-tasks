<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);

foreach($arr as $e) { 
   if($e==2 || $e==3 || $e==4) {
exit ("Есть!");
   }
}
echo "Нет!";

<?php
// Shorter variant:

foreach(array(4, 2, 5, 19, 13, 0, 10) as $e) { 
   if($e==2 || $e==3 || $e==4) {
exit ("Есть!");
   }
}
echo "Нет!";