<?php
// //regular expressions - Регулярные выражения
// //preeg_muth, preg_replace

// $string = 'Test search pattern';
// $pattern = '/search/';

// $result = preg_match($pattern, $string);

// var_dump($result);


// $string = '21-11-2015';

// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

// $replacement = 'month: $2 day: $1, year: $3';

// echo preg_replace($pattern, $replacement, $string);

//----------------------------------------------------------
// class Page {
//     public $title = 'Index Page';

// }
// $index = new Page();
// echo $index->title;

// class Human {

// private $age = 5;
// function say() {
//     echo "$this->age";
// }
// }
// $obj = new Human;
// //  echo"$obj->age";

// $obj->say();
//----------------------------------------------------------


libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>John Doe</user>
<email>john@example.com</email>
</document>";


$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
  echo "Failed loading XML: ";
  foreach(libxml_get_errors() as $error) {
    echo "<br>", $error->message;
  }
} else {
  print_r($xml);
}
//----------------------------------------------------------