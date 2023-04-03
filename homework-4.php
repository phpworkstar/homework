<?php

echo "1. Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain.";
echo '<br><br>';

function func1 (){
    $string = 'london is the capital of great britain.';
    echo ucwords($string);
}

echo func1();

echo '<hr>';


echo "2. Дана строка 'html <b>css</b> php'. Удалите теги из этой строки. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.";
echo '<br><br>';

function func2 (){
   
   $string = 'html <b>css</b> php';
   $str2 = strip_tags($string);

   $array = explode(" ", $str2);
   var_dump($array);
}

func2();

echo '<hr>';

echo "3. Дана строка. Перемешайте символы этой строки в случайном порядке.";
echo '<br><br>';

function func3(){

$string = 'Some of the ideas that later formed the basis of robotics appeared in the ancient era - long before the introduction of the above terms.';

$mix = str_shuffle($string);
echo $mix;

}

func3();

echo '<hr>';

echo "4. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.";
echo '<br><br>';


function func4(){
$month = 1;
$year = 2023;

echo cal_days_in_month(CAL_GREGORIAN, $month, $year);
}

func4();

echo '<hr>';

echo "5. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp. ";
echo '<br><br>';


function func5(){
    echo date("Y-m-d") . '<br>';
    echo date("Y.m.d") . '<br>';
    echo date("H:i:s") . '<br>';
    echo date("H.i.s") . '<br>';

    echo mktime(12, 59, 59, 31, 12, 2025); //timestamp произвольное значение
}

func5();

echo '<hr>';


function func6(){

echo '6. В переменной $date лежит дата в формате 2025-12-31. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.';
echo '<br><br>';

$date=strtotime('2025-12-31, +2 days');
$date2 = date('d.m.Y', $date);
echo $date2 . "<br>";

$date3=strtotime('2025-12-31, +1month, +3 days');
$date4 = date('d.m.Y', $date3);
echo $date4. "<br>";

$date5=strtotime('2025-12-31, +1year');
$date6 = date('d.m.Y', $date5);
echo $date6. "<br>";

$date7=strtotime('2025-12-31, -3days');
$date8 = date('d.m.Y', $date7);
echo $date8. "<br>";

}

func6();

echo '<hr>';

echo "7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.";
echo '<br><br>';

function func7(){

$string = '1a2b3c4b5d6e7f8g9h0';

$text = '';
for($i=0;$string[$i];$i++){
    $text .= !is_numeric($string[$i]) ? $string[$i] : '';
}

echo $text;

}

func7();

echo '<hr>';

echo "8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число.";
echo '<br><br>';


function func8(){
$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);
echo $min . "<br>";
echo $max . "<br>";
}

func8();

echo '<hr>';


echo "9. Выведите на экран случайное число от 1 до 100. ";
echo '<br><br>';

function func9(){
     
echo  mt_rand(1,100);

}

func9();

echo '<hr>';

echo "10. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели. ";
echo '<br><br>';

function func10(){

    $array = [
        1=>'Понедельник',
        2=>'Вторник',
        3=>'Среда',
        4=>'Четверг',
        5=>'Пятница',
        6=>'Суббота',
        7=>'Воскресение'
    ];

    $week = date('w');
    echo($array[$week]);

}


func10();

echo '<hr>';

echo "11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным. ";
echo '<br><br>';

function func11() {
$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
     foreach($array as $index){
        $sum += array_sum($index);
     }
echo $sum;
}

func11();


echo '<hr>';

echo '12. Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то есть вывести без дублей при помощи лишь одного цикла и без использования функций PHP.';
echo '<br><br>';


function func12(){
$array = array(1,1,1,2,2,2,2,3);
$similar = [];
  foreach ($array as $value) {
  if (!in_array($value, $similar)) {
  $similar[] = $value;
   }
 }
echo implode(',', $similar);

}

func12();

echo '<hr>';

echo '13. Используя ассоциативный массив, добавить на страницу навигационное меню.

Заполните массив соблюдая сл. условия: название индексов являются именем файла (без расширения), на который ссылается меню; значения массива явл. названиями пунктов меню.';
echo '<br><br>';

function func13(){

$menu = array(
    'Home'=>'index.php',
    'About'=>'about.php',
    'Services'=>'services.php',
    'Catalog'=>'catalog.php',
    'Contacts'=>'contacts.php'

);
    foreach ($menu as $index => $value){
       echo "<a href=" . $value .">" . $index . "</a><br>";
       
    }

}

func13();

echo '<hr>';

echo '14. Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере.';
echo '<br><br>';

function func14() {
    echo "<div style=\"background:black;position:relative;height:1000px;width:100%\">";
    $a = rand(1, 20);
    for ($i = 0; $i < $a; $i++) { 
        $lenght = rand(0, 91);
        $height = rand(0, 77);
        $square = rand(1, 57);

        echo "<div style=\"position:absolute;width:{$square}px;height:{$square}px;left:{$lenght}%;top:{$height}%;background:red;\"></div>";
    }
   echo "</div>";
}

func14();

echo '<hr>';

echo "15.  Дана строка с любыми символами. Для примера пусть будет '1234567890'. Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся.";
echo '<br><br>';
function func15() {
$string = '1234567890';
$array = [];
for ($i=0; $i<=strlen($string); $i++){
    $array[] = substr($string, 0, $i);
    $string = substr_replace($string, '', 0, $i);
}
echo implode('<br>', $array);

}

func15();

echo '<hr>';

echo "16. Найдите сумму элементов массива между двумя нулями (первым и последним нулями в массиве). Если двух нулей нет в массиве, то выведите ноль. В массиве может быть более 2х нулей. Пример массива: [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]";
echo '<br><br>';


function func16 () {

$array = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2];
$first = 0;
$last = 0;

for ($i = 0; $i <count($array); $i++){
     if($array[$i]==0){
        $first = $i;
        break;
     }else{
        $total = null;
     }
}

for($i = count($array) - 1; $i > 0; $i--){
    if($array[$i] == 0){
        $last = $i;
        break;
    }else{
        $total = 0;
    }
}
if($first==$last){
    $total = 0;
}else{
    for($v = $first; $v < $last; $v++){
        $total +=$array[$v];
    }
  }

  return $total;
}

echo func16();

echo '<hr>';

echo "17. Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff).";
echo '<br><br>';

function func17(){
    $range = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
    return $range = "#".$range[mt_rand(1,15)].$range[mt_rand(1,15)].$range[mt_rand(1,15)].$range[mt_rand(1,15)].$range[mt_rand(1,15)].$range[mt_rand(1,15)];
}

echo func17();

echo '<hr>';

echo "18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых идущих подряд цифры и замените их на '!'. ";
echo '<br><br>';

function func18(){
    $string = '332 441 550';
    for($i=0; $i<strlen($string)-1;$i++){
        if($string[$i] == $string[$i+1]){
            $string[$i] = '!';
            $string[$i+1] = '!';
        }
    }
    return $string;
}

echo func18();


echo '<hr>';

echo "19. Напишите ф-цию строгой проверки ввода номер телефона в международном формате (<код страны> <код города или сети> <номер телефона>) и упрощенной проверки ввода простого номера с кодом и без него. Функция должна возвращать true или false.  ";
echo '<br><br>';

//$number = '+375( 29 ) 571 20-10'; valid
//$number = '+375( 29 ) n571 20-10'; not valid
$number = '571 20-10';

if(preg_match('/^\+[(\d -\)-]+$/', $number, $matches)) {
    echo implode($matches) . ' Phone is valid';
 } elseif (preg_match('/^[\d -]+$/', $number, $matches)){
    echo implode($matches) . ' Phone is valid';
 }else{
    echo 'Phone is not valid';
}

echo '<hr>';

echo "20. Напишите функцию, которая должна проверить правильность ввода адреса эл. почты. Почта верна при условии: 
a. весь адрес не должен содержать русские буквы и спецсимволы, кроме одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут быть первыми и последними в адресе, и идти подряд, например: «..», «@.», «.@» или «@@», «_@», «@-», «--» и т.п. 
b. имя эл. почты (до знака @) должно быть длиной более 2 символов, причем имя может содержать только буквы, цифры, но не быть первыми и единственными в имени, и точку; 
c. после последней точки и после @, домен верхнего уровня (ru, by, com и т.п.) не может быть длиной менее 2 и более 11 символов.";


echo '<br><br>';

$email = 'T.2@Tbg.rb';
if (preg_match('/^[a-z0-9]+(?:[.-_])[a-z0-9]+[@]{1}[a-z0-9]{2,22}\.[\w]{2,11}+$/i', $email, $matches)){
    echo "правильный email";
}else{
    echo "неправильный email";
}


?>