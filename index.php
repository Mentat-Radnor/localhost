<?php

// define('WORD', 'Kavabanga');
$newDate = date('l jS \of F Y h:i:s A');
// echo WORD;



$a = 4;
$b = 5;
var_dump($a == $b);




$a = 5;
$b = '05';
var_dump($a == $b);                             // отбрасывает 0 и сравнивает 2 значения. Так как это не строгое сравнение, то выдает true
var_dump((int)'012345') . "\n";                  // Так как мы не указали количество чисел, то 0 отбрасывается 
var_dump((float)123.0 === (int)123.0) . "\n"; // разные типы?
var_dump((int)0 === (int)'hello, world') . "\n"; // Скорее всего, происходит проверка на наличие чисел, если их нет то слово приводится к 0. Если бы мы поставили в начале 1, то было false
var_dump((int)0 === (int)'1hello, world') . "\n";


$a = 1;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo $a . $b;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo $newDate ?></h1>
</body>

</html>