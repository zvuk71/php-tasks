<?php
// 1й вариант объявления констант:
define("DAYS_COUNT", 7);
define("MONTH_COUNT", 12);

echo DAYS_COUNT . "\n" . MONTH_COUNT;

// 2й вариант объявления констант:
const DAYS_COUNT = 7;
const MONTH_COUNT = 12;

echo DAYS_COUNT . "\n" . MONTH_COUNT;