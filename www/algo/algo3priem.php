<?php

require_once 'uitvoer.php';

$version = "Prime for next loop, version I";
$start = $GLOBALS['START'];
$loop = $GLOBALS['LOOP'];
$t = time();
$c = 0;


function primeNumbers(int $p) {
  $prime = true;
  $root = floor(sqrt($p))+1;

  // Eerste gevallen gelijk eruit vissen.
  if ( $p < 1 )  { return false; }
  if ( $p == 1 )  { return false; }
  if ( $p == 2 )  { return true; }
  if (( $p % 2) == 0 ) {return false;}

  // Hier zou je vanaf drie moeten beginnen!
  for ($i = 3; $i < $root; $i++ ) {
    if ((( $p % $i) == 0 ) AND ( $p != $i ) AND ($i > 1)) { $prime = false;break; }
  }

  return $prime;
}


echo "<H1>$version</H1><P>Loop van $start tot $loop</P><BR />\n";

for ($x = $start; $x <= $loop; $x++) {

  if (primeNumbers($x) == true)  
  {   
    echo "The number is: $x is prime.<br>\n";
    $c++;
    makeSQL($version, $x); 
  }
}

$t = time() - $t;

showResult($version, $start, $loop, $t, $c);

?>

