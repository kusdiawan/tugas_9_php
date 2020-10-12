<?php
$nilai_awal = 0;
$nilai_berikut = 1;

echo "Deret Fibonacci :  ", $nilai_awal, " ", $nilai_berikut; 

for ($i=0; $i<20; $i++){
   $deret = $nilai_awal + $nilai_berikut;
   echo " ", $deret;
 
   $nilai_awal = $nilai_berikut;
   $nilai_berikut = $deret;
}


?>