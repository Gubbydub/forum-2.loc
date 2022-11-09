<?php
// //regular expressions - Регулярные выражения
// //preeg_muth, preg_replace

// $string = 'Test search pattern';
// $pattern = '/search/';

// $result = preg_match($pattern, $string);

// var_dump($result);


$string = '21-11-2015';

$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

$replacement = 'month: $2 day: $1, year: $3';

echo preg_replace($pattern, $replacement, $string);


