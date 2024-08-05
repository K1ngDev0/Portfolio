<?php

$werkgetal = 10;
$originelegetal = $werkgetal;
$binairgetal = "";

for ($m = round(log($werkgetal, 2)); $m >= 0; $m--) {

	$r = 2**$m;

	if ( $werkgetal >= $r ) {
		$werkgetal = $werkgetal - $r;
		$binairgetal = $binairgetal."1";
	}
	else {
		$binairgetal = $binairgetal."0";
	}
	echo "Het werkgetal is: $werkgetal 2^$m = $r <br>\n";
}

echo "\n$originelegetal is omgezet naar $binairgetal <br/>\n";

?>
