<?php
// Первое
$i = 0;

while ($i <= 100){
	if(($i % 3) == 0){
		echo $i . '<br>';
	}
	$i++;
}

// Второе

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

// Таблица со *

echo '<table border="1">';

for ($i = 0; $i <= 15; $i++){
	
	echo '<tr>';
	
	for ($j = 0; $j <= 15; $j++){
		
		if ($i == 0){
			
			echo '<td style bgcolor = "gray">' .($i + 1) * $j . '</td>' ;
			
		}elseif ($i > 0 and $j == 0){
			
			$j++;			
			
			echo '<td style bgcolor = "gray">' . $i * $j . '</td>';
			
			$j--;
			
		}else{
			
			echo '<td>' .  $i * $j . '</td>';
		}
		
	}
	echo '<br>';
	echo '</tr>';
}

echo '</table>';





