<?php 

echo "---------------Q1<br>";
$years=2013;
if($years%4==0)
    echo "It is  a leap year";
else
    echo"It is not a leap year";
echo "<br>---------------Q2<br>";
$wither=27;
if($wither < 20){
echo "it is winter time!";
}else
echo"it is summer time!";
echo "<br>---------------Q3<br>";
$firstnumber=2;
$secondnumber=2;
if ($firstnumber==$secondnumber){
    echo ($secondnumber+$firstnumber)*3;
}
echo "<br>---------------Q4<br>";
$firstnumber=10;
$secondnumber=10;
if ($firstnumber+$secondnumber !==30){
    echo 'false';
}else{
    echo 'true';
}
echo "<br>---------------Q5<br>";
$number=10;
if ($number <= 0 ){
    echo 'false';
}else{
    echo $number*3;
}
echo "<br> ---------------Q6<br>";
$number=50;
if ($number <= 50 && $number >= 20 ){
    echo 'true';
}else{
    echo 'false';
}
echo "<br> ---------------Q7<br>";
$numberLargest=[1,5,9];
echo max($numberLargest);
echo "<br> ---------------Q8<br>";
$number = 250;
    if($number<=50)
    $number*=2.5;
    elseif($number<=150)
    $number*=5;
    elseif($number<=250)
    $number*=6.2;
    else
    $number*=7.5;
    echo "sum = $number";
echo "<br> ---------------Q9<br>";
$number1=3;
    $number2=5;
    $operation9="+";
    switch($operation9){
        case "+":
            $sum = $number1+$number2;
            break;
        case "-":
            $sum = $number1-$number2;
            break;
        case "*":
            $sum = $number1*$number2;
            break;
        case "/":
            $sum = $number1/$number2;
            break;
    }
    echo "<p> $number1 $operation9 $number2 = $sum";
echo "<br> ---------------Q10<br>";
$age=15;
if($age < 18)
echo "is no eligible to vote";
echo "<br> ---------------Q11<br>";
$number=-60;
if($number >0)
echo "positive";
else if($number <0)
echo "negative";
else if($number = 0)
echo "Zero";
echo "<br> ---------------Q12<br>";
$grades = [60,86,95,63,55,74,79,62,50];
$avg = array_sum($grades)/count($grades);
if($avg>=90 && $avg <= 100) 
    echo "A";
elseif($avg >= 80) 
    echo "B";
elseif($avg >= 70) 
    echo "C";
elseif($avg >= 60) 
    echo "D";
echo "<br> ---------------Q13<br>";







?>