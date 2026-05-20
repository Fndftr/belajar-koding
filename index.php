<?php
// $a = 0;
// $b = 0;

// print "Masukan angka: ";
// $a = trim(fgets(STDIN));
// print "Masukan angka kedua: ";
// $b = trim(fgets(STDIN));

//perkalian sederhana
// $result = $a * $b;
// print "Hasil perkalian: $result\n";

//kalkulator sederhana
print "Menu kalkulator: \n";
print "1. Penjumlahan\n";
print "2. Pengurangan\n";

print "Pilih operasi (1-4): ";
$choice = trim(fgets(STDIN));

switch ($choice) {
    case 1:
        print "masukan angka: ";
        $a = trim(fgets(STDIN));
        print "masukan angka : ";
        $b = trim(fgets(STDIN));
        $result = $a + $b;
        print "Hasil penjumlahan: $result\n";
        break;
    case 2:
        print "masukan angka: ";
        $a = trim(fgets(STDIN));
        print "masukan angka : ";
        $b = trim(fgets(STDIN));
        $result = $a - $b;
        print "Hasil pengurangan: $result\n";
        break;
    default:
        print "Pilihan tidak valid\n";
        break;
    
}
?>