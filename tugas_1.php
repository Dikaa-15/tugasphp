<?php

$judul = "HTML didalam PHP";
$subtitle = "===Biodata diri===";
echo "<h1>$judul</h1";
echo "<br />";
echo "<h1>$subtitle</h1>";
echo "<hr>";

//content

$namalengkap = "Nama Lengkap: Dwi andika f";
echo "<h3>$namalengkap</h3>";

$TTL = "Tempat, Tanggal Lahir: Jakarta,15 february 2008";
echo "<h3>$TTL</h3>";

$nomor = "Nomor WhatsaApp : 0895396083939";
echo "<h3>$nomor</h3>";

$deskripsi = "Deskripsikan Diri : Seorang siswa SMK dijurusan RPL dengan pengalaman mengerjakan project-project seperti tugas akhir menggunakan HTML,CSS,JS";
echo "<h3>$deskripsi</h3>";
echo "<hr>";

$title = "PHP didalam HTML";
$subjudul = "===Biodata diri===";
$name = "nama lengkap : Dwi andika f";
$birht = "Tempat, tinggal lahir: Jakarta, 15 february 2008";
$number = "Nomor WhatsaApp : 0895396083939";
$description = "Deskripsikan Diri : Seorang siswa SMK dijurusan RPL dengan pengalaman mengerjakan project-project seperti tugas akhir menggunakan HTML,CSS,JS";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <h1><?= $subjudul; ?></h1>
    <hr>
    <h3><?= $name; ?></h3>
    <h3><?= $birht; ?></h3>
    <h3><?= $number; ?></h3>
    <h3><?= $description; ?></h3>
</body>
</html>
