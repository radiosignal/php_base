
Задача №2.<br>

<?php

//2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.


$a = mt_rand(0, 15);

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
function setNumber($a) {
echo $a++ ."<br>";
if ($a <= 15) setNumber($a);
}

setNumber($a);