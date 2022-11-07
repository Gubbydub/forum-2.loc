<?php

//regular expressions
//preeg_muth, preg_replace

$string = 'Ученик сидит за партой.';
$pattern = '/Ученик/';

$result = preg_match($pattern, $string);

var_dump($result);