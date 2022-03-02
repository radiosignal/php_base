

<?php
//3. Реализовать основные 4 арифметические операции в виде функций с
// двумя параметрами. Обязательно использовать оператор return. В делении проверьте
// деление на 0 и верните текст ошибки.



$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";


function sum  ($a, $b)
{
    return $a+$b;
};
//echo sum(1,2);
$sum = sum($a,$b);




function xtr  ($a, $b)
{
    return abs( $a-$b);
};
//echo xtr(1,2);
$xtr = xtr($a, $b);



function mltp ($a, $b)
{
    return abs( $a*$b);
};
//echo  mltp(1,2);
$mltp =  mltp($a, $b);



function div  ($a, $b)
{
    return abs( $a/$b);
};
//echo div(1,2);
$div = div($a, $b);

