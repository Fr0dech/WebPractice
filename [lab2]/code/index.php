<?php
header('Content-type: text/plain');


echo "Task 1\n";
/* Imagine a lot of code here*/
$very_bad_unclear_name = "15 chicken wings";
//Write your code here:
$order = &$very_bad_unclear_name;
$order .= ', a number nine large, a number six with extra dip...';
//Dont change the line below
echo "Your order is: $very_bad_unclear_name.";
echo "\n";
echo "\n";


echo "Task 2\n";
$cumpot = 1;
echo $cumpot;
echo "\n";
$sirgay = 1.3;
echo $sirgay;
echo "\n";
echo 1337-1325;
echo "\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "\n";
echo "\n";


echo "Task 11\n";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "\n";
echo "\n";


echo "Task 12\n";
echo 8**2;
echo "\n";
echo "\n";


echo "Task 13\n";
$my_num = 20;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";
echo "\n";
// so far so good


echo "Task 14\n";
$a = 10;
$b = 3;
echo "$a % $b = ";
echo $a % $b;
echo "\n";

if ($a % $b == 0)
{
	echo "Делится: ";
	echo $a / $b;
}
else
{
	echo "Делится с остатком: ";
	echo $a % $b;
}
echo "\n";


$st = pow(2,10);
echo $st;
echo "\n";
$st = sqrt(245);
echo $st;
echo "\n";
$array = [4, 2, 5, 19, 13, 0, 10];
$sumkv = 0;
foreach ($array as $value){
    $sumkv += pow($value,2);
}
$sqrt = sqrt($sumkv);
echo $sqrt;
echo "\n";


$number1 = 379;
$sqrt1 = sqrt($number1);
$zer = round($sqrt1);
$one = round($sqrt1, 1);
$two = round($sqrt1, 2);
echo $zer;
echo "\n";
echo $one;
echo "\n";
echo $two;
echo "\n";


$number2 = 587;
$sqrt2 = sqrt($number2);
$floor = floor($sqrt2);
$ceil = ceil($sqrt2);
echo $floor;
echo "\n";
echo $ceil;



$array1 = [4, -2, 5, 19, -130, 0, 10];
$min = min($array1);
$max = max($array1);
echo "\nmin: ";
echo $min;
echo "\nmax: ";
echo $max;
echo "\n";


$r = rand(1,100);
echo $r;
echo "\n";
$arrayr = [];
for ($i = 0; $i<10; $i++)
{
	$arrayr[] = rand(1,100);
}
$arraystring = "";
foreach ($arrayr as $number)
{
	$arraystring .= "$number ";
}
echo $arraystring;
echo "\n";

$num1 = 20;
$num2 = 21;
$moduleminus = abs($num1-$num2);
echo $moduleminus;
echo "\n";

$modulearray = [1, 2, -1, -2, 3, -3];
$module = -1;
$moduledarraystring = "";
foreach ($modulearray as $value){
    $module = abs($value);
	$moduledarraystring .= "$module ";
}
echo $moduledarraystring;
echo "\n";

$k = rand(1,100);
echo $k;
echo "\n";
$mass = "";
for ($i = 1; $i <= $k; $i++){
    if ($k  % $i == 0){
        $mass .= $i." ";
    }
}
echo $mass;
echo "\n";

$arrSumm = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$summ = 0;
$numberofchisel = 0;
foreach ($arrSumm as $value){
    if ($summ > 10){
        break;
    }
    else{
        $summ += $value;
        $numberofchisel += 1;
    }
}
echo $numberofchisel;
echo " первых чисел\n";
echo "\n";
echo "\n";

echo "Task 15\n";

function printStringReturnNumber($str){
    echo $str."\n"."Length: ".strlen($str);
}
$my_num = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

echo printStringReturnNumber($my_num);
echo "\n";
echo "\n";

echo "Task 16\n";
$str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";
function increaseEnthusiasm($string){
    echo $string."!";
}
echo increaseEnthusiasm($str);
echo "\n";
echo "\n";

function  repeatThreeTimes($string, $times){
    for ($i = 0; $i < $times; $i++){
        echo $string." ";
    }
}
echo  repeatThreeTimes($str,3);
echo "\n";
echo "\n";
echo  increaseEnthusiasm(repeatThreeTimes($str,3));
echo "\n";
echo "\n";
function cut($string, $k = 10){
    echo substr($string,$k);
}
echo cut($str, 111);
echo "\n";
echo "\n";

function recursityElenemt($array, $index = 0){
    if($index < count($array)){
        echo $array[$index]." ";
        recursityElenemt($array, $index+1);
    }
}
$array = [1, 2, 3, 4, 5];
echo recursityElenemt($array);
echo "\n";
echo "\n";

function sumcif($number){
    $sum = 0;
    while ($number > 0 || $sum > 9){
        if ($number == 0) {
            $number = $sum;
            $sum = 0;
        }
        $sum += $number % 10;
        $number = (int)($number / 10); 
    }
    echo $sum;  
}
$num = 1234556879841265;
echo sumcif($num);
echo "\n";
echo "\n";

echo "Task 17\n";
$array = [];
$k = 7;
for ($i = 1; $i < ($k+1); $i++){
    $array[] = str_repeat("x", $i);
}
print_r($array);

function arrayFill($string, $k){
    for ($i = 0; $i<$k; $i++){
        $array[] = $string;
   }
   print_r($array);
}
echo arrayFill("x", 7);

function sumOfArrays($array){
    $sum = 0;
    foreach ($array as $subArray){
        foreach ($subArray as $value){
            $sum += $value;
        }
    }
    echo $sum;
}
$array = [[1,2],[3,5]];
echo sumOfArrays($array);
echo "\n";

$arr = [];
$n = 1;
$rows = 7;
$cols = 7;
for ($i = 0; $i< $rows; $i++){
    $podar = [];
    for ($j = 0; $j< $cols; $j++){
        $podar[] = $n;
        $n++;
    }
    $arr[] = $podar;
}
print_r($arr);

$arr = [2,5,3,9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
echo "\n";

$user = [
    "name" => "Stanislav",
    "surname" => "Mikhailov",
    "patronymic" => "Dmitrievich"
];

echo $user["name"]." ".$user["surname"]." ".$user["patronymic"];
echo "\n";

$date = [
    "year" => "2024",
    "month" => "03",
    "day" => "10"
];
echo $date["year"]."-".$date["month"]."-".$date["day"];
echo "\n";
echo "\n";

$arr = ["a","b","c","d","e"];
$n = 0;
foreach ($arr as $value){
    $n+=1;
}
echo $n;
echo "\n";
$arr = ["a","b","c","d","e"];
$n = 0;

foreach ($arr as $value){
    $n+=1;
}
echo "\n";
echo $arr[($n-1)];
echo "\n";
echo $arr[($n-2)];
echo "\n";
echo "\n";

echo "Task 18\n";

function sum10($a,$b){
    if ($a+$b > 10){
        echo "True";
    }
    else{
        echo "False"; 
    }    
}
echo sum10(6,5);
echo "\n";

function equalNumber($a,$b){
    if ($a == $b){
        echo "True";
    }
    else{
        echo "False"; 
    }    
}
echo equalNumber(4,5);
echo "\n";
$int = 0;
echo ($int == 0) ? "Верно" : "Неверно";
echo "\n";

function numberInTheRange($a){
    if ($a < 10 || $a > 99){
        echo "Число либо <10, либо >99";
    }
    else{
        if ((($a % 10) + floor($a / 10)) < 10){
            echo "Однозначна";
        }
        else{
            echo "Двузначна";
        }
    }
}
echo numberInTheRange(9);
echo "\n";


$arr = [3,4,5];
$n = 0;
foreach ($arr as $value){
    $n++;
}
if ($n == 3){
    $sum = $arr[0] + $arr[1] + $arr[2];
    echo $sum;
    echo "\n";
}
else{
    echo "В массиве не 3 элемента";
    echo "\n";
}

echo "\n";
echo "Task 19\n";
$n = 0;
for ($i = 1; $i < 21; $i++)
	{
    for ($j = 1; $j < ($i+1); $j++){
        echo "x";
    }
    echo "\n";
}
echo "\n";

echo "Task 20\n";
$arr = [1,14,167,1082];
$srAr = array_sum($arr) / count($arr);
echo $srAr;
echo "\n";

$i = 100;
$sum = ($i * ($i + 1)) / 2;
// Математика 6 класс Виленкин
echo $sum;
echo "\n"; 

$arr = [1,4,9,16,25,36,49];
print_r(array_map("sqrt", $arr));
echo "\n"; 

$keys = range("a","z");
$value = range(1,26);
print_r(array_combine($keys , $value));
echo "\n";

$str = '1234567890';
$sum = array_sum(str_split($str, 2));
print_r($sum);
echo "\n"; 

