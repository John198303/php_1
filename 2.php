<?php
// Первое задание
$a = -5;
$b = -10;
$c = NULL;

if($a >= 0 and $b >= 0){
    $c = $a - $b;
}elseif($a < 0 and $b < 0){
    $c = $a * $b;
}else {
    $c = $a + $b;
}
echo $c;
?>

<hr>

<?php
// Второе задание

$a = random_int(0, 15);
switch($a){
    case "$a":
        while($a <= 15){
            echo $a++; 
        }		
     break;      
}
?>
<hr>

<?php

// Третье задание

function summ($a, $b){
    return ($a + $b);
}
function substraction($a, $b){
    return ($a - $b);
}
function multiplication($a, $b){
    return ($a * $b);
}
function division($a, $b){
    return ($a / $b);
}

echo (division(4,8));

?>
<hr>
<?php
// Четвертое задание

function mathOperation($arg1, $arg2, $operation){
    if($operation == 'summ'){
        return summ($arg1,$arg2);
    }elseif ($operation == 'substraction') {
        return substraction($arg1,$arg2);
    }elseif ($operation == 'multiplication') {
        return multiplication($arg1,$arg2);
    }else {
        return division($arg1,$arg2);
    }
}

$total = mathOperation(44, 5, 'division');
echo $total;

// Или

function mathOperation1($arg1, $arg2, $operation){
    switch($operation){
        case 'summ':
            return summ($arg1,$arg2);
        break;
        case 'substraction':
            return substraction($arg1,$arg2);
        break;
        case 'multiplication':
            return multiplication($arg1,$arg2);
        break;
        case 'division':
            return division($arg1,$arg2);
        break;
    }
}
echo $case = mathOperation1(5, 6, 'summ');

?>
<hr>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
    
 </head>
 <body>
  <h1><?php echo $h1 ?></h1>
  <p><?php echo 'Сейчас ' . date("F j, Y, g:i a") ?></p>
 </body>
</html>

<?php
// Шестое задание   ?

// Седьмое задание

<?php

function getName($hour, $minute){
		
	if($hour == 1 or $hour == 21){
		return $hour . ' час';
	}
	elseif($hour > 1 and $hour < 5 or $hour > 21 and $hour < 25){
		return $hour . ' часа';
	}
	else{
		return $hour . ' часов';
	}
}


echo getName(21, 5);



?>