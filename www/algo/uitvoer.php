

<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "INCLUDE LOADED<BR />\n";

// In dit bestand staat het bereik waarin gezocht wordt, vandaar GLOBAL
GLOBAL $START;
GLOBAL $LOOP;
$START = 1000000;
$LOOP = 3000;
$LOOP = $LOOP + $START;



function showResult($version, $start, $loop, $t, $c){

	$myfile = fopen("primeResult.txt", "a") or die("Unable to open file!");
	$txt = "$version.<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = date("Y-m-d H:i:s")."<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = "Lus van $start tot $loop.<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = "Duur: " . showTijd($t) . ".<BR />" . $t . " seconden.<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);


	$txt = "$c priemgetallen gevonden.<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = gethostname()."<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = PHP_OS."<BR />";
	echo "$txt\n";
	$txt = str_replace("<BR />", "\n", $txt);
	fwrite($myfile, $txt);

	$txt = "-------------------------\n";
	fwrite($myfile, $txt);
	fclose($myfile);
};



function makeSQL($v, $p){
	return;
	$dat = date("Y-m-d H:i:s");
	$sqlfile = fopen("primeResult.sql", "a") or die("Unable to open file!");
	$txt = "INSERT INTO primeFound ( herkomst, prime, moment ) VALUES('$v', $p, '$dat');\n";
	fwrite($sqlfile, $txt);
	fclose($sqlfile);
};



function showTijd($t) {

  $sec = $t % 60;
  $tijd = $sec;
  if ($sec < 10) { $tijd = "0" . $tijd; }
  $min = intdiv($t,60) % 60;
  $tijd = $min.":".$tijd;
  if ($min < 10) { $tijd = "0" . $tijd; }
  $uur = intdiv($t,3600) % 24;
  $tijd = $uur.":".$tijd;
  $dag = intdiv($t, 86400);
  if ($dag > 0 ) {
    $jaar = intdiv($dag, 365);
    $tijd = $dag." dagen ( ongeveer " . $jaar . " jaar ) en tijdsduur " . $tijd;
  }

  return $tijd;
};





function Bestaat($v, $t) {
            if ( is_numeric($v) ) {
              if ( $v > 0 ) {
         echo "$t $v<BR />\n";
      }
   }
};





function Biljet($b, $f, $w) {
            $wi = 100;
            if ( $w == "B" ) { $wi = 200; }

            if ( is_numeric($b) ) {
              if ( $b > 0 ) {
                for ($x = 1; $x <= $b; $x++) {
                   echo "<IMG SRC=./pix/$f WIDTH=$wi >\n";
           }
      }
   if ( $w == "B" ) { echo "<BR />\n";  }
   }
};








?>

