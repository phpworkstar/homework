<?php

echo ':1. Если переменная $a пустая, то выведите "Верно", иначе выведите "Неверно". Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, "", "0".';

echo "<br>","<br>";

$a = null;


if (!isset($a)) {
    echo 'Верно';
}else{
    echo 'Неверно';
}

echo "<br>","<br>";

echo "Решение: Проверил. Все Верно, кроме null";

echo "<hr>";

echo '2. Дано трехзначное число. Поменяйте среднюю цифру на ноль. ';
echo "<br>","<br>";

$a = 543;
echo "Первоначальное число = $a";
echo "<br>";
$a.='';
$a[1] = 0;

echo "Замена = $a";

echo "<hr>";

echo '3. Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5';
echo "<br>","<br>";

$a = 0;
$b = 6;

if($a<=1 && $b >= 3){
    $sum = $a + $b;
}else {
    $sum = $a - $b;
}

echo "Результат : $sum";

echo "<hr>";


echo "4. Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.";
echo "<br>";

$string = 'abcde';
echo "<br>","<br>";

if ($string[0] = 'a') {
    echo 'да';
}else{
    echo 'нет';
}

echo "<hr>";


echo "5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.";
echo "<br>","<br>";

$string = '123123';

if($string[0]+$string[1]+$string[2]==$string[3]+$string[4]+$string[5]){
    echo "да";
}else{
    echo "нет";
}

echo "<hr>";

echo "6. Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.";
echo "<br>","<br>";

$a = 371;
$after = range(361,10000000);
$first = range(1,30);
$second = range(31,60);
$third = range(61,90);
$four = range(91,120);
$five = range(121,150);
$six = range(151,180);
$seven = range(181,210);
$eight = range(211,240);
$nine = range(241,270);
$ten= range(271,300);
$eleven = range(301,330);
$twelve = range(331,360);
if (in_array($a, $first)) {
    echo "1 час";
}elseif(in_array($a, $second)){
    echo "2 час";
}elseif(in_array($a, $third)){
    echo "3 час";
}elseif(in_array($a, $four)){
    echo "4 час";
}elseif(in_array($a, $five)){
    echo "5 час";
}elseif(in_array($a, $six)){
    echo "6 час";
}elseif(in_array($a, $seven)){
    echo "7 час";
}elseif(in_array($a, $eight)){
    echo "8 час";
}elseif(in_array($a, $nine)){
    echo "9 час";
}elseif(in_array($a, $ten)){
    echo "10 час";
}elseif(in_array($a, $eleven)){
    echo "11 час";
}elseif(in_array($a, $twelve)){
    echo "12 час";
}elseif(in_array($a, $after)){
    echo "Проверьте правильность ввода параметра";
}elseif($a==0){
    echo "Это полдень или полночь, посмотрите в окно";
}

echo "<hr>";

echo "7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.";
echo "<br>","<br>";

$value = 0;
for ($i = 20; $i <=45; $i++){
    if(fmod($i, 5)== 0) {
        $value+=$i;
    }
}

echo ("Получилось: $value");

echo "<hr>";

echo "8. Дано пятизначное число. Цифры на четных позициях «занулить». Например, из 12345 получается число 10305.";
echo "<br>","<br>";

$number = 12345;
$number = str_split($number);

foreach ($number as $value) {
    if($value%2) {
        $number[$value] = 0;
    }
    
}

var_dump ($number); //вот как получилось, буду искать решение позже


echo "<hr>";

echo '9. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.';
echo "<br>","<br>";

$num = 1000;
$a = 0;
while ($num >=50) {
    $num/=2;
    $a++;
}

echo "Получилось : $num количество действий: $a";

echo "<br>","<br>";

$num = 1000;
for($a = 0; $num>=50; $a++){
$num/=2;
}

echo "Получилось : $num количество действий: $a";

echo "<hr>";


echo '10. Вывести на экран фигуру из звездочек: ******* ******* ******* ******* (квадрат из n строк, в каждой строке n звездочек)';
echo "<br>","<br>";

$n = 7;
for ($i = 0; $i <$n; $i++) { 
for ($h = 0; $h <$n; $h++) { 
echo "*  ";
}
echo "<br>";
}

echo "<hr>";
echo "<br>";

?>