<h1>Contoh Array Multidimensional dan Sort Array</h1>
<?php
	echo "<h3>1. Array Multidimensional 1</h3>";
	$a = array
		(
		array("Abid","17","Bugis"),
		array("Abu","20","Kajang"),
		array("Bide","30","Batak")
		);
	echo "Nama : ".$a[0][0].", Umur : ".$a[0][1].", Suku : ".$a[0][2]."<br>";
	echo "Nama : ".$a[1][2].", Umur : ".$a[1][1].", Suku : ".$a[1][2]."<br>";
	echo "Nama : ".$a[2][0].", Umur : ".$a[2][1].", Suku : ".$a[2][2]."<br>";										;
	echo "<br>";
	echo "<h3>2. Array Multidimensional 2</h3>";
	$b = array
		( 1 =>
		array("Windows","7"),
		array("Linux","Ubuntu")
		);
	for ($x=1; $x<=2; $x++){
		echo "OS ke $x";
		echo "<ul>";
		for ($y=0; $y<2; $y++){
			echo "<li>".$b[$x][$y]."</li>";
		}
		echo "</ul>";
	}
	echo "<br>";
	echo "<h3>3. Array Multidimensional 3</h3>";
	$c = array
		(
		array("NAMA GAME","DEVELOPER","HARGA"),
		array("Uncharted 4","Naughty Dog","Rp.900.000,-"),
		array("Watch Dog 2","Ubisoft","Rp. 400.000,-"),
		array("GTA V","Rockstar","Rp.600.000,-")
		);
	for ($j=0; $j<4; $j++){
		echo "<table border='1px'>";
		echo "<tr>";
		for ($k=0; $k<3; $k++){
			echo "<td width='120px'>".$c[$j][$k]."</td>"; 
		}
		echo "</tr>";
		echo "</table>";
	}
	echo "<br>";
	echo "<h3>4. Sort Array 1</h3>";
	$d = array(1=>"Abid",2=>"Khairy",3=>"Bide",4=>"Mase");
	asort($d);
	foreach ($d as $i => $o){
		echo $i."->".$o."<br>";
	}
	echo "<br>";
	echo "<h3>5. Sort Array 2</h3>";
	
	$e = array(1=>"Noboru",2=>"Tzuki",3=>"Mirai");
	krsort($e);
	foreach ($e as $e1 => $e2){
		echo $e1." => ".$e2."<br>";
	}
?>