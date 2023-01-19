<?php
    function registerUser($email){
    echo $email . ' registered';
    }
// registerUser('Dennis');

function sum($n1 = 4,$n2 = 5){
    return $n1 + $n2;
}


$number = sum();
// echo $number;


$subtract = function ($sn1, $sn2) {
    return $sn1 - $sn2;
};
// echo $subtract(10,5);


$multiply = fn ($sn1, $sn2) => $sn1 * $sn2;

echo $multiply(9,9);

 ?>