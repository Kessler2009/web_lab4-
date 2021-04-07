<?php

echo "hello! <BR>";


echo 'Hello, we\'re Groot <BR>';
echo "Hello, we're Groot <BR>";

echo '<BR>';



Define ("constant", 12345);
echo constant;
echo '<BR>';
Define ("constant", 54321);
echo constant;
echo '<BR> <BR> <BR>';


$var1 = 7;
$var2 = 12;

echo '$var1'; //$var1
echo '<BR>';
echo "$var1"; //7

$x = 2;
$y = 2.2;
$z = true;
echo '<BR><BR>';

var_dump($x); echo '<BR>';
var_dump($y); echo '<BR>';
var_dump($z); echo '<BR><BR>';

$yy = (int)2.9;
var_dump($yy); echo '<BR><BR>';

$x1 = 8;
$x2 = 3;
echo $x1+$x2;echo '<BR>';
echo $x1*$x2;echo '<BR>';
echo $x1/$x2; echo '<BR>';
$x1 = $x1**$x2;
echo "$x1 <BR>";echo '<BR>';
echo ++$x2;echo '<BR><BR>';


$str1 = 'Hello';
$str2 = "hello php";
$str3 = "3000";
$str4 = '********trim**********';
$combo = $str1.$str3.$str2;
echo $combo;echo '<BR>';
echo strlen($str1);echo '<BR>';
echo strtoupper($str2);echo '<BR><BR>';
echo $str4;echo '<BR>';
echo trim($str4, '*');echo '<BR>';

echo date('d-m-y');echo '<BR><BR>';

$arr = array(11, 12, 12, 23, 112);
echo $arr[2];echo '<BR>'; //12
$arr[2] = 8;
echo $arr[2];echo '<BR><BR>'; //8

$assocArr1 = array(
"stud1" => array("name" => 'Tom', "group"
=> 'TV91'),
"stud2" => array("name" => 'Peter', "group"
=> 'TV91')
);
echo $assocArr1["stud1"]["name"];echo '<BR><BR>';

$assocArr2 = array('A'=>11, 'B'=>12, 'C'=>21);
var_dump(array_search('11', $assocArr2));echo '<BR><BR>';

var_dump(1 == 1.0);echo '<BR>';
var_dump(1 === 1.0);echo '<BR>';
var_dump(1 !== 1.0);echo '<BR>';
var_dump(1 <=> 1.0);echo '<BR>';
var_dump(1 == 1.0 and 1 === 1.0);echo '<BR>';
var_dump(1 == 1.0 && 1 !== 1.0);echo '<BR>';
var_dump(1 == 1.0 || 1 === 1.0);echo '<BR><BR>';


$a = 7;

if ($a < 0)
{
echo "$a is less than 0";
}
elseif ($a < 5)
echo "$a is less than 5";
elseif ($a > 10)
echo "$a is more than 10";
else
echo "$a is $a";
echo '<BR><BR>';


$a = (7 > 10 ? 'Yes' : 'No');
echo $a;echo '<BR><BR>';

$b = 20;
switch ($b)
{
case 10:
echo '10<BR>';
break;
case 20:
echo '20<BR>';
break;
case 25:
echo '25<BR>';
break;
default:
echo '$b<BR>';
}
echo '<BR><BR>';

for ($c = 1; $c < 12; ++$c){
echo 'The value of $c is '.$c.'<BR><BR>';
}

$arr1 = array(11, 12, 13, 14, 15);
foreach ($arr1 as $num){
echo 'The number is '.$num.'<BR>';
}

echo '<BR><BR>';

$d = 1;

while ($d < 12)
{
echo 'The value of $d is '.$d.'<BR>';
$d++;
}




