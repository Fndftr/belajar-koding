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
switch ($choice) {
    case 1:
        echo "masukan data yang ingin ditambahkan\n";
        $data = trim(fgets(STDIN));
        array_push($array, $data);
        pilihan();
        break;
    case 2:
        echo "masukan data yang ingin dihapus\n";
        $data = trim(fgets(STDIN));
        if (($key = array_search($data, $array)) !== false) {
            unset($array[$key]);
        }
        pilihan();
        break;
    case 3:
        echo "masukan data yang ingin diupdate\n";
        $data = trim(fgets(STDIN));
        echo "masukan data baru\n";
        $newData = trim(fgets(STDIN));
        if (($key = array_search($data, $array)) !== false) {
            $array[$key] = $newData;
        }
        pilihan();
        break;
    default:
        echo "pilihan tidak valid\n";
        pilihan();
        break;
}
}


?>
