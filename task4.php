Задача №3-4. <br>

<?php

include "task3.php";

//4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    $result = false;

    switch ($operation) {
        case "sum":
            $result = sum($arg1, $arg2);
            break;
        case "xtr":
            $result = xtr($arg1, $arg2);
            break;
        case "mltp":
            $result = mltp($arg1, $arg2);
            break;
        case "div":
            $result = div($arg1, $arg2);
            break;

    }
    return $result;
}
$sum = mathOperation($a, $b, "sum");
$div = mathOperation($a, $b, "div");
$xtr = mathOperation($a, $b, "xtr");
$mltp = mathOperation($a, $b, "mltp");

//echo mathOperation($a, $b, "sum");
//echo mathOperation($a, $b, "div");
//echo mathOperation($a, $b, "xtr");
//echo mathOperation($a, $b, "mltp");


