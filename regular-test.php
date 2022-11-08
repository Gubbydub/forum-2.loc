<?php
//regular expressions
//preeg_muth, preg_replace

$string = 'Test search pattern';
$pattern = '/search/';

$result = preg_match($pattern, $string);

var_dump($result);


