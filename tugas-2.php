<?php


$Nilaiharian = 68;
$Nilaiuts = 80;
$Nilaiakhir =80;

$Nilaiharianbagus = $Nilaiharian >= 70;
$Nilaiutsbagus = $Nilaiuts >= 80;
$Nilaiakhirbagus = $Nilaiakhir >= 80;

$hasil1 = $Nilaiharianbagus && $Nilaiutsbagus && $Nilaiakhirbagus;

$hasil2 = $Nilaiharianbagus || $Nilaiutsbagus || $Nilaiakhirbagus;

var_dump($hasil1);
echo "<br />";
var_dump($hasil2);

// Alasan

// hasil1 (false)
//karena terdapat nilai yang false (68),sedangkan nilaibagusnya 70 maka keseluruhan nilai dianggap false
// Jika menggunakan operator && dan salah satu nilai adalah false maka seluruh nilai adalah false

//hasil2 (true)
//karena terdapat 2 nilai yang true maka seluruh nilai dianggap True
//jika menggunakan operator OR(||) dan jika hanya terdapat satu nilai true maka seluruh nilai adalah true

?>