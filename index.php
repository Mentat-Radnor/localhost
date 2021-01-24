<?php


// Задание 1
$min = -100;
$max = 100;


// define('WORD', 'Kavabanga');
$a = rand($min, $max);
$b = rand($min, $max);

echo $a . "<br/>";


echo $b . "<br/>";


if ($a > 0 && $b > 0)
    echo  $a + $b;
else if ($a < 0 && $b < 0)
    echo $a * $b;
else
    echo $a + $b;

echo "<br/> Задача 2";
// задание 2
$a = rand(0, 15);

switch ($a) {
    case 0:
        echo "<br/> Число 0";
        break;
    case 1:
        echo "<br/> Число 1";
        break;
    case 2:
        echo "<br/> Число 2";
        break;
    case 3:
        echo "<br/> Число 3";
        break;
    case 4:
        echo "<br/> Число 4";
        break;
    case 5:
        echo "<br/> Число 5";
        break;
    case 6:
        echo "<br/> Число 6";
        break;
    case 7:
        echo "<br/> Число 7";
        break;
    case 8:
        echo "<br/> Число 8";
        break;
    case 9:
        echo "<br/> Число 9";
        break;
    case 10:
        echo "<br/> Число 10";
        break;
    case 11:
        echo "<br/> Число 11";
        break;
    case 12:
        echo "<br/> Число 12";
        break;
    case 13:
        echo "<br/> Число 13";
        break;
    case 14:
        echo "<br/> Число 14";
        break;
    case 15:
        echo "<br/> Число 15 <br/>";
        break;
}

echo "<br/> Задача 3 <br/>";

function sum($a, $b)
{
    $a += $b;
    echo $a . "<br/>";
}

sum($a, $b);

function subt($a, $b)
{
    $a -= $b;
    echo $a . "<br/>";
}

subt($a, $b);

function multipl($a, $b)
{
    $a *= $b;
    echo $a . "<br/>";
}

multipl($a, $b);

function div($a, $b)
{
    $a /= $b;
    echo $a . "<br/>";
}

Div($a, $b);

echo "<br/> Задача 4 <br/>";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "Умножение":
            multipl($arg1, $arg2);
            break;
        case "Деление":
            div($arg1, $arg2);
            break;
        case "Вычитание":
            subt($arg1, $arg2);
            break;
        case "Сложение":
            sum($arg1, $arg2);
            break;
    }
}

mathOperation(5, 10, "Умножение");

echo "<br/>";

$today = date("Y");

echo $today;


echo "<br/> Задача 5 <br/>";

function power($val, $pow)
{
    if (
        $val == 1
    ) return $pow;
    else return $pow * power(--$val, $pow);
}

echo power(4, 4);

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