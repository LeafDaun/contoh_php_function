<?php

$myfile = fopen("tes.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile); // selalu gunakan ini untuk menutup file di memory


echo "<br><hr>";

// =========

$myfile = fopen("tes.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("tes.txt"));
fclose($myfile);

// ==========================

$a="dalam rangka kegiatan ini \nkami akan melaksanakn \nsemua ini";
file_put_contents('tes.txt', $a);

$x = file_get_contents('tes.txt');
var_dump($x);