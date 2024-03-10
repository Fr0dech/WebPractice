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


