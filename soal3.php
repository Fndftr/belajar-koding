<?php 

echo "rata rata dari beberapa angka\n";
echo "beri aku angka-angka yang ingin dihitung rata-ratanya, pisahkan dengan spasi\n";
$input = trim(fgets(STDIN));
$numbers = explode(" ", $input);
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "rata-rata: " . $average . "\n";

?>