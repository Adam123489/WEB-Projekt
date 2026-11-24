<?php
$studentName = "Adam Neděle";
$test1 = 100;
$test2 = 80;
$test3 = 90;

echo $vysledek = $test1 + $test2 + $test3,  "/", 300;
$prumer = $vysledek / 3;
$uspesnost = $vysledek / 3;

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
    echo "<br>";
    echo "Bonusove ukoly";
}

$grade = "výborný";

echo "<p><strong>Jméno studenta:</strong> $studentName</p>";
echo "<p><strong>Výsledky testů:</strong> $test1, $test2, $test3</p>";
echo "<p><strong>Celkový počet bodů:</strong> $vysledek</p>";
echo "<p><strong>Průměrný počet bodů:</strong> $prumer</p>";
echo "<p><strong>Procentuální úspěšnost:</strong> $uspesnost%</p>";
echo "<p><strong>Výsledná známka:</strong> $grade</p>";