<?php


// $age = 17;

// if($age >= 18){
//     echo "You are old enough to vote";
// } else {
//     echo "Sorry you are not eligible to vote";
// }

// $t = date("H");


// if($t < 12){
//     echo "Good Morning";
// } elseif($t < 17) {
//     echo "Good Afternoon";
// }
//     else {
//         echo "Good evening";
//     } 

$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo "No Post";
// }

echo !empty($posts) ? $posts[0] : "No Posts";

?>