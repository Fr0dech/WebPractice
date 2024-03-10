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
// so far so good