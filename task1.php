
Задача №1.<br>
<?php
$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "a = {$a};<br>
      b = {$b};<br>";

function variables($a,$b){
    if($a>=0 && $b>=0)
    {
        return " variables are positive";

    }
    elseif(0>=$a && 0>=$b)
    {
       return  "variables are negative";

    }
    else {return "variables are different ";}
}

echo variables($a,$b)."<br>";