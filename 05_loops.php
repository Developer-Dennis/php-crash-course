<?php
    // for($x = 0; $x <= 10; $x++){
    // echo 'Number' . $x . '<br>';
    // }


// $x = 1;
// while($x <= 15){
//     echo 'Number' . $x . '<br>';
//     $x++;
// }

// $x = 1;
// do {
//     echo 'Number' . $x . '<br>';
//     $x++; 
// } while($x <= 5)



// $posts = ['First Post', 'Second Post', 'Third Posts'];

// // for($x = 0; $x < count($posts); $x++){
// //      echo $posts[$x];
// // }


// foreach($posts as $index=> $post){
//     echo $index . '-' .$post . '<br>';
// };



$person = [
    'first_name' => 'Dennis',
    'last_name' => 'Kemboi',
    'email' => 'denkogei24@gmail.com',
];

foreach($person as $key => $value){
    echo "$key - $value <br>";
}

?>