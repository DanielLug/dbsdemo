<?php

$items = array();

for ($i =0; $i < 10; $i++){
  $items[$i] = "This is message $i";
}
/* Set the header tzpe for output */
header ('Content-Type: application/json');

/* Create a variable to hold zour JSON data*/
$jsonOutput = json_encode($items);

/* Output the JSON data */
echo $jsonOutput;
