<?php

echo "<h3>1. Indexed Array</h3>";

$a=array("Lust","Envy","Wrath","Pride");
asort($a);
foreach($a as $a1 => $a2){
	echo $a1.". Saya Bukan ".$a2.'<br>';
}
echo '<br><br>';

echo "<h3>2. Associative Array</h3>";

$b=array("Nafsu"=>"Lust","Iri"=>"Envy","Marah"=>"Wrath","Angkuh"=>"Pride");
ksort($b);
foreach($b as $b1 => $b2){
	echo $b1." => ".$b2.'<br>';
}
echo '<br><br>';

echo "<h3>3. MultiDimensional Array</h3>";

$c=array
	(
	array('c','a','l','d'),
	array('g','e','m','h')
	);
foreach($c as $c1){
	echo "Array ke";
	echo "<ul>";
	foreach($c1 as $c2){
		echo "Value => ".$c2."<br>";
	}
	echo "</ul>";
}
?>
