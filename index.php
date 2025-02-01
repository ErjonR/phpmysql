<?php

$num = 5;
if($num < 0){
    echo "$num is less tyhan 0";
}else{
    echo "$num is bigger than 0";
}
$age = 15;
if(($age > 12) && ($age<20)){
    echo "You are a teenager <br>";
}


$a = 20;
$b = 10;
if($a == $b){
    echo "They are equal <br>";
}else{
    echo "They are not equal <br>";
}

$day = "Monday";
switch($day){
case 'Monday':
echo "Start of the week";
break;
case 'Tuesday':
echo "Let's get throught the week <br>";
break;
case 'Wednesday':
echo "The middle of the week <br>";
break;
case 'Thursday':
echo "Weekend is here! <br";
break;
case 'Friday':
echo "Almost weekend <br>";
break;
default:
echo "Invalid day <br>";
break;
}

#while loop
$x = 1;
while($x <= 5){
    echo "The number is:$x <br>";

    $x++;
}
$y = 0;
do{
    echo"The number is: $y <br>";
    $y++;
}while($y <=5);
?>
