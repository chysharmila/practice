<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
define("hello","wlecome to apuls ");
function test(){

echo hello;
}
test();
?>

<?php
$x=30;
$y=40;

if ($x>=$y) {
	echo "the highest value is ".$x;
}
 
 	
 

else
{
	echo "exit";
}
echo "<br>";
?>
<?php
$day="fridaygggg";
switch ($day) {
	case 'sunday':
		echo "this is sunday ";
		break;
		case 'monday':
		echo "this is Monday ";
		break;
		case 'tuesday':
		echo "this is Tuesday ";
		break;
		case 'wednesday':
		echo "this is wednesday ";
		break;
		case 'theusday':
		echo "this is Thuesday ";

		break;
		case 'friday':
		echo "this is friday ";
		break;
		case 'saturday':
		echo "this is saturday ";
		break;
	
	default:
		echo "please enter valid input";
		break;
}
echo "<br>";
?>
<?php
$x=700;
$y=70;
$z=100;
if ($x>$y&&$x>$z) {
echo "the highest value is x :".$x;

}
elseif ($y>$z) {
	echo "The highest value is y :".$y;
}
else
{
	echo "The highest value is Z :".$z;
}
echo "<br>";
?>
<?php
$x=5;
if ($x==0) {
echo "It is not even nor odd";

}
elseif ($x % 2 == 0) {
	echo "number is even";
}

else{
	echo "number is odd";
}
?>
<?php
$i;
$x=7;
$y=0;
for ($i=1; $i <=$x ; $i++){
	if ($x % 1 == 0) {
		$y++;
	} 
	
}
if ($y == 2) {
	echo "prime number";

}
else{

	echo "not prime number";
}


?>


</body>

</html>
