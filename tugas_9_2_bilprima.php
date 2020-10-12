<?php
 echo "Deret Bilangan Prima : ";
 for ($x=1; $x<=200; $x++){
	 $bil = 0;
	 for ($y=1; $y<=$x; $y++){
	 	 if($x % $y == 0){
	 	 	$bil++;
	 	 }
	 }
	 if ($bil == 2){
	 	echo $x, ", " ;
	 }
}
?>