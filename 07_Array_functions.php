<?php
// $fruits = ['apples', 'oranges', 'pear'];

// get length of an array

// echo count($fruits);

// search array
// var_dump(in_array('apples', $fruits));

// $fruits[] = 'grape';
//  array_push($fruits, 'banana');
// array_unshift($fruits, 'mangoes');

// // remove from the end of array

// array_pop($fruits);

// remove from the start of array

// array_shift($fruits);

// remove specific
// unset($fruits[2]);

// split into 2 chunks

// $chunked_array = $array_chunk($fruits, 2);

// print_r($chunked_array);


// print_r($fruits)


$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);


?>
