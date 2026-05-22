<?php
//belajar functions
function looping($batas,$i, $c, $d = 0){
	
	for ($i; $i <= $batas; $i++){
		echo "ini angka $c[$i] \n";
	}

}

//$c = [1,2,3,4,5,6,7,8,9,10];
//$batas = 10;
//$i = 0;
//looping($batas, $i, $c);
$mobil = ['brand'=>'ferrari', 'model'=>'GT45', 'tahun'=>2000];

$mobil['roda'] = 4;

var_dump($mobil);

?>

