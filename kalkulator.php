<?php

//readline adalah membaca garis untuk cmd di interface users
$angka1 = readline('masukan angka 1 : ');
$angka2 = readline('masukan angka 2 : ');
$kalkulasi = readline('masukan aritmatika :');

$array = ["+","-","*","/"];
// is_numeric adalah untuk mengecek apakah itu type data integer / angka
// in_array adalah untuk mencari apakah data di array ada atau tidak
// and or not equals
// and = &&
// or = ||
if (is_numeric($angka1) && is_numeric($angka2) && in_array($kalkulasi,$array)){
	if ($kalkulasi == "+") {
		$result = $angka1 + $angka2;
	}elseif ($kalkulasi == "-") {
		$result = $angka1 - $angka2;
	}elseif ($kalkulasi == "*") {
		$result = $angka1 * $angka2;
	}elseif ($kalkulasi =="/") {
		$result = $angka1 / $angka2;
	}
}else{
	$result = " Angka mesti bertipe integer dan aritmatika (+ - / *)";

}
echo $result;
