<html>
<head>
	<title>
		php examples
	</title>
</head>
<body>
<?php
echo strrev(" .dlrow olleH"); // Reverse string
echo str_repeat("Hip ", 2); // Repeat string
echo strtoupper("hooray!"); // String to uppercase
?>
<br>
<br>


<?php
print(60*2400);
?>
<br>
<br>


<?php
/**echo fix_names("LOL","kok","mAmA");
function fix_names($n1,$n2,$n3){
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
return $n1 . " " . $n2 . " " . $n3;
}
**/?>

<br><br>


<?php
$names = fix_names("LOL","kok","mAmA");
echo $names[0]." ".$names[1]." ".$names[2];
function fix_names($n1,$n2,$n3){
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
//return $n1 . " " . $n2 . " " . $n3;
	return array($n1, $n2, $n3);
}

?>

<br><br>

<?php
$a1 = "LOL";
$a2 = "kok";
$a3 = "mAmA";
echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names1($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;
function fix_names1(&$bo1, &$bo2, &$bo3)
{
$bo1 = ucfirst(strtolower($bo1));
$bo2 = ucfirst(strtolower($bo2));
$bo3 = ucfirst(strtolower($bo3));
	//return $bo1.$bo2.$bo3;
}
?>

<br><br>

<?php

$c0 = "LOL";
$c1 = "kok";
$c2 = "mAmA";

echo $c0. " ".$c1. " ".$c2. "<br>";
fix_names2();
echo $c0. " ".$c1. " ".$c2;

function fix_names2(){
	global $c0; $c0 = ucfirst(strtolower($c0));
	global $c1; $c1 = ucfirst(strtolower($c1));
	global $c2; $c2 = ucfirst(strtolower($c2));
}

?>

<br><br>

<?php
include "library.php";

$var = "whatever variable";
echo $var;

?>

<br><br>

<?php
include_once "library.php";

$var2 = "include_once";
echo $var2;
?>


</body>
</html>
