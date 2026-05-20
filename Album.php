<?php
echo "mau kalkulator? ";
$menu = trim(fgets(STDIN));
do {
    echo "menu kalkulator \n";
    echo "1. penjumlahan\n";
    echo "2. pengurangan\n";
    echo "pilih operasi 1-2 \n";
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case 1: 
            echo "masukkan angka : ";
            $a = trim(fgets(STDIN));
            echo "masukkan angka : ";
            $b = trim(fgets(STDIN));
            $result = $a + $b;
            echo "hasilnya : $result\n";
            break;
        case 2:
         echo "masukkan angka : ";
            $a = trim(fgets(STDIN));
            echo "masukkan angka : ";
            $b = trim(fgets(STDIN));
            $result = $a - $b;
            echo "hasilnya : $result\n";
            break;
        default: 
            echo "pilihan tidak ada\n";
            break;
    }
    
     echo "lagi? ";
     $menu = trim(fgets(STDIN));
     }while ($menu == "ya" or "iya" or "yes");


?>
