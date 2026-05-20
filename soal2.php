<?php 

echo "beri aku kata untuk dibalik";
$isi = trim(fgets(STDIN));
$terbalik = strrev($isi);
echo "kata yang dibalik: " . $terbalik . "\n";

?>