<?php 
// echo "beri aku nomor \n";
// $nomor = trim(fgets(STDIN));

// $prima = true;
// if($nomor <=1) {
//     $prima = false;
// }

// for ($i = 2; $i< $nomor; $i++){
//     if ($nomor % $i == 0) {
//         $prima = false;
//         break;
//     }
// }

// if ($prima) {
//     echo "$nomor adalah prima";
// }else {
//     echo "$nomor adalah bukan prima";
// }
echo "beri aku nomor";
$input = trim(fgets(STDIN));
$num = (int)$input;

$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "$num is prime";
} else {
    echo "$num is not prime";
}




?>