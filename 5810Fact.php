<?php
//Създавам си променлива, чрез която ще пресметна 5! Тя има стойност 1, защото 
//ако ще умножавам
$fact5=1;
//създавам for цикъл, който генерира числата от 5до 1 в обратен ред 
for($i=5;$i>=1;$i--)
{ //умножавам числата от 5 до 1 
    $fact5= $i * $fact5;
}
//извеждам факториела на 5
echo 'Факториела на 5 е:'. $fact5 . '<br/>';
// направила съм същото и за 8! и за 10!
$fact8=1;

for($i=8;$i>=1;$i--)
{
    $fact8= $i * $fact8;
}
echo 'Факториела на 8 е:'. $fact8 . '<br/>';

$fact10=1;

for($i=10;$i>=1;$i--)
{
    $fact10= $i * $fact10;
}
echo 'Факториела на 10 е:'. $fact10 . '<br/>';
