<?php
$studentName = "Adam Neděle";
$test1 = 100;
$test2 = 80;
$test3 = 90;

echo $vysledek = $test1  + $test2 + $test3,  "/", 300;
$prumer = $vysledek / 3;
$uspesnost = 100;

echo "<br>";
echo $prumer;
echo "<br>";
echo $uspesnost, "%";
echo "<br>";
echo "<br>";

if ($uspesnost < 0 || $uspesnost > 100) {
    echo "Neplatný počet bodů.";
} elseif ($uspesnost >= 90) {
    echo "Známka 1";
} elseif ($uspesnost >= 75) {
    echo "Známka 2";
} elseif ($uspesnost >= 60) {
    echo "Známka 3";
} elseif ($uspesnost >= 40) {
    echo "Známka 4";
} else {
    echo "Známka 5";
}
