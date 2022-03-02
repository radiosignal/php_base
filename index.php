
<?php

//Базовый курс PHP
//Урок 2. Условные блоки, ветвление функции

include "task1.php";
//1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//если $a и $b положительные, вывести а и б положительные;
//если $а и $b отрицательные, вывести а и б отрицательные;
//если $а и $b разных знаков, вывести а и б разных знаков;
//Ноль можно считать положительным числом.


//
//function variables($a,$b){
//    if($a>=0 && $b>=0)
//    {
//        return " variables are positive";
//
//    }
//    elseif(0>=$a && 0>=$b)
//    {
//       return  "variables are negative";
//
//    }
//    else {return "variables are different ";}
//}
//
//echo variables(-1,50);
//
//
//
//






//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.
//
include "task2.php";
//$a = mt_rand(0, 15);

// Вариант №1.
//switch ($a) {
//    case 0: echo $a++ . "  ";
//    case 1: echo $a++ . "  ";
//    case 2: echo $a++ . "  ";
//    case 3: echo $a++ . "  ";
//    case 4: echo $a++ . "  ";
//    case 5: echo $a++ . "  ";
//    case 6: echo $a++ . "  ";
//    case 7: echo $a++ . "  ";
//    case 8: echo $a++ . "  ";
//    case 9: echo $a++ . "  ";
//    case 10: echo $a++ . "  ";
//    case 11: echo $a++ . "  ";
//    case 12: echo $a++ . "  ";
//    case 13: echo $a++ . "  ";
//    case 14: echo $a++ . "  ";
//    case 15: echo $a++ . "  ";
//}

// Вариант №2.
//function setNumber($a) {
//    echo $a++ ."<br>";
//    if ($a <= 15) setNumber($a);
//}
//
//setNumber($a);

//Варинт №3 цикл.

//function setNumber($n,$prevN)
//{
//
//    for ($prevN; $prevN <= $n ; $prevN++) {
//
//        echo $prevN."->";
//
// }
//}
//
//setNumber(15,5);


////3. Реализовать основные 4 арифметические операции в виде функций с
//// двумя параметрами. Обязательно использовать оператор return. В делении проверьте
//// деление на 0 и верните текст ошибки.
//
//include "task3.php";

// function sum  ($a, $b)
//{
//     return$a+$b;
//};
//echo sum(1,2);
//
//
//
//
//function xtr  ($a, $b)
//{
//     return abs( $a-$b);
//};
//echo xtr(1,2);
//
//
//
//
//function mltp ($a, $b)
//{
//    return abs( $a*$b);
//};
//echo  mltp(1,2);
//
//
//
//
//function div  ($a, $b)
//{
//    return abs( $a/$b);
//};
//echo div(1,2);
//
//


////4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
//
include "task4.php";
//
//function mathOperation($arg1, $arg2, $operation) {
//    $result = false;
//
//    switch ($operation) {
//        case "sum":
//            $result = sum($arg1, $arg2);
//            break;
//        case "xtr":
//            $result = xtr($arg1, $arg2);
//            break;
//        case "mltp":
//            $result = mltp($arg1, $arg2);
//            break;
//        case "div":
//            $result = div($arg1, $arg2);
//            break;
//
//    }
//    return $result;
//}
//$task4 = mathOperation(15, 12, "mltp");
//echo (mathOperation(15, 12, "mltp"));

//5. Собрать страницу с меню и контентом, зарендерить как минимум 2 подшаблона через renderTemplate. ВАЖНОЕ
//include "./components/content.php";

$about = renderTemplate('./components/about',777777);
$menu = renderTemplate('./components/menu');

echo renderTemplate('./components/layout',$about,$menu);


//include "./functions/renderTemplate.php";

function renderTemplate ($page, $content= '', $menu = '',$about = '')
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}


//6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
include "task6.php"

//7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
//22 часа 15 минут
//21 час 43 минуты

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HW2</title>

</head>
<body>


<h1>Задание №3 </h1>
<ul><p>результат выполнения сложения</p> sum = <?=$sum?></ul>
<ul><p>результат выполнения вычитания</p> xtr = <?=$xtr?></ul>
<ul><p>результат выполнения умножения</p> mltp = <?=$mltp?></ul>
<ul><p>результат выполнения деления</p> div = <?=$div?></ul>
<h1>Задание №4 </h1>
<ul><p>результат выполнения сложения</p> sum = <?=$sum?></ul>
<ul><p>результат выполнения вычитания</p> xtr = <?=$xtr?></ul>
<ul><p>результат выполнения умножения</p> mltp = <?=$mltp?></ul>
<ul><p>результат выполнения деления</p> div = <?=$div?></ul>

</body>
</html>