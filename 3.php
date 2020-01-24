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

echo '<table border="3">';

for ($i = 0; $i <= 10; $i++){
	
	echo '<tr>';
	
	for ($j = 0; $j <= 10; $j++){
		
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


// Третье

$region = [
	'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
	'Ленинградская область' => ['Санкт - Петербург', 'Всеволожск', 'Павловск'],
	'Рязанская область' => ['Рыбное', 'Михайлов', 'Ряжск'],
	'Беларусь' => 'Минск'
];

foreach ($region as $key => $item){
	if (is_array($item)){		
	echo $key . ': <br>';		
	foreach ($item as $it){
		echo $it . ' ,' ;
	}
	}else{
		echo $key . ': ' . $item;	
    }
	echo '<br>';
}

// Четвертое

function change($word){
	

	$word = strtr( $word, [ 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g',
			 'д' => 'd', 'е' => 'e', 'ж' => 'j', 'з' => 'z', 
			 'и' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 
			 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
			 'с' => 'c', 'т' => 't', 'у' => 'y', 'ф' => 'f',
			 'х' => 'h', 'ц' => 'ce', 'ш' => 'ha', 'щ' => 'cha',
			 'э' => 'ue', 'ю' => 'yu', 'я' => 'ya']);


	return $word;
}

echo change('ваза');

// Пятое 

function change($word){
	

	$word = strtr( $word, [' ' => '_']);


	return $word;
}

echo change('в а з а');

// Шестое











