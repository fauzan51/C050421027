<?php
echo "fungsi count<br/>";

$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
echo 'Ditemukan data sebanyak ' .  count($kendaraan) . ' data<br/>';
// Hasil: Ditemukan data sebanyak 5 data.

echo "gunakan fungsi join<br/>";

$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$sql 		= 'INSERT INTO kendaraan VALUES ("' . join('","', $kendaraan) . '")<br/>';
echo $sql ;
// Hasil: INSERT INTO kendaraan VALUES ("Mobil","Motor","Sepeda")

echo "gunakan fungsi array_map<br/>";

$kendaraan 	= ['Mobil ', ' Motor', ' Sepeda '];
$trimmed = array_map('trim', $kendaraan);
echo '<pre>'; print_r($kendaraan); print_r($trimmed);
/* Hasil:
Array
(
    [0] => Mobil 
    [1] =>  Motor
    [2] =>  Sepeda 
)
Array
(
    [0] => Mobil
    [1] => Motor
    [2] => Sepeda
)*/

echo "function yaitu trim<br/>";
function toUpper($array_value) {
	return strtoupper($array_value);
}
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$upper 		= array_map('toUpper', $kendaraan);
echo '<pre>'; print_r($upper);
/* HASIL:
Array
(
    [0] => MOBIL 
    [1] => MOTOR
    [2] => SEPEDA 
)*/
echo "menggunakan buitin function strtoupper()<br/>";
$kendaraan = ['Mobil', 'Motor', 'Sepeda']; 
$upper = array_map('strtoupper', $kendaraan); 
echo '<pre>'; print_r($upper);

?>