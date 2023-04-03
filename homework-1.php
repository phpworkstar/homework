<?php

//1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).  

echo '1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).';

$a = 10;
$b = 2;
echo '<br>';
var_dump($a -$b);
echo '<br>';
var_dump($a +$b);
echo '<br>';
var_dump($a *$b);
echo '<br>';
var_dump($a /$b);
echo '<hr>';

// результат int(8) 


echo "2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2)"; 

$x = 2;
$y = 6;
$z = 9;

echo '<br>';
var_dump(($x + 1) * 4 - 2 * ($z - 2 * pow($x, 2) + pow($y, 2)));
echo '<hr>';

// результат int(-62) 

echo '3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result. ';

$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo '<br>';
var_dump($result);
echo '<hr>';

// результат int(14) 

echo '4. Создайте переменные $text1="Привет, " и $text2="Мир!". С помощью этих переменных и операции сложения строк выведите на экран фразу "Привет, Мир!". ';


$text1 = "Привет, ";
$text2="Мир!";
echo '<br>';
echo $text1. $text2;
echo '<hr>';

echo '5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу "Привет, %Имя%!". Вместо %Имя% должно стоять ваше имя. ';

$name = "Игнат";

echo '<br>';
echo "Привет ". $name;
echo '<hr>';

echo '6. Создайте переменную $num и присвойте ей значение "12345". Найдите сумму цифр этого числа.';

$num = "12345";

$total = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo '<br>';
echo $total; 
echo '<hr>';

// результат 15

echo "7. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года.";

$today = date("Y-m-d H:i:s");
echo '<br>';

$hour = 60 * 60;
$day = 24 * $hour;
$month = 30 * $day;
$year = 365 * $day;

echo '<br>';
echo "в часе $hour секунд, в сутках $day секунд, в месяце $month секунд, в году $year секунд";
echo '<br>', '<br>';

$yearcurrent = date('Y');
$monthcurrent = date('m');
$daycurrent = date('d');
$hourcurrent = date('h');
$minutecurrent = date('i');
$secоndcurrent = date('s');

$NowYearFrom2000 = $yearcurrent - 2000;
$NowMonthFrom2000 = ($NowYearFrom2000 - 1)* 12 + ($monthcurrent-1);
$NowDayFrom2000 = $NowMonthFrom2000 * 365 + $daycurrent;
$NowHoursFrom2000 = 60 * $NowDayFrom2000 + $hourcurrent;
$NowMinutesFrom2000 = 60 * $NowHoursFrom2000 + $minutecurrent;
$NowSecondFrom2000 = 60 * $NowMinutesFrom2000 + $secоndcurrent;

echo "Cейчас $today";
echo '<br>';
echo "C 2000-го года прошло $NowSecondFrom2000 секунд";
echo '<hr>';

echo " 8. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'. ";

$hour = date('h');
$minute = date('i');
$second = date('s');

echo '<br>', '<br>';
echo "Настоящее время: $hour : $minute : $second";
echo '<br>';
echo '<hr>';

echo "9 Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.";

$var = 1; 
$var += 12; 
$var -= 14; 
$var *= 5;
$var /= 7; 
$var ++; 
$var --; 

echo '<br>';
echo "Значение: $var"; 
echo '<hr>';


echo "10. Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу 'Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.ваше отчество). Мне <ваш возраст> лет. Каждая фраза должна начинаться с новой строки ";
echo '<br>'.'<br>';

define ("SURNAME", "Игнатов");
define ("NAME", "Игнат");
define ("PATRONYMIC", "Игнатович");
define("AGE", "32");

if (!defined('SURNAME') or !defined('NAME') or !defined('PATRONYMIC') or !defined('AGE'))
{
    echo "Константа не существует";
}else{
    echo "Меня зовут ". SURNAME . " (" . mb_substr(NAME,0,1) . '.' . mb_substr(PATRONYMIC,0,1). '.' . ")" . "." . "<br>" . "Мне " . AGE . " года.";
}

echo '<hr>';

?>