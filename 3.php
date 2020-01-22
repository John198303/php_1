<?php
$i = 0;

while ($i <= 100){
	if(($i % 3) == 0){
		echo $i . '<br>';
	}
	$i++;
}

$a = 0;

do {
	
	if($a == 0){
		echo $a . ' - ноль' . '<br>';
	}
	elseif(($a % 2) == 0){
		echo $a . ' - четное число' . '<br>';
		
	}else{
		echo $a . ' - нечетное число' . '<br>';
		
	}
	
	$a++;
	
}while($a <= 10);