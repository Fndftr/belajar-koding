<?php
pilihan();
function pilihan(){
$array[] = [];
var_dump($array); 
echo "mau ngapain?\n";
echo "1. tambah array\n";
echo "2. delete array\n";
echo "3. update array\n";
$choice = trim(fgets(STDIN)); 
task($choice, $array);
}

function task($choice, $array){
    switch($choice){
        case 1:
            echo "tulis yang mau di tambah\n";
            $add = trim(fgets(STDIN));
            array_push($array, $add);
            pilihan();
            pilihan();
            break;
        case 2:
            count == 0;
            foreach ($array as $count){
                $count++;
            }
            echo "tulis yang mau di update";
            $updatte = trim(fgets(STDIN));
            $array[count] = "$update";
    }
    
}


?>
