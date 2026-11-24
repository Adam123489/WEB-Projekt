<?php
$nazevPocitace = "Herní PC";
$vyrobcePocitace = "Gigabyte";
$operacniPamet = 64;
$uloziste = 4;
$SSD = true;
$operacniSystem = "Windows 11";

echo "<h1>Profil mého počitače</h1>"; // Toto je nadpis
echo "<p><strong>Název počitače:</strong> $nazevPocitace</p>";
echo "<p><strong>Výrobce:</strong> $vyrobcePocitace</p>";
echo "<p><strong>Operační paměť:</strong> $operacniPamet GB</p>";
echo "<p><strong>Úložiště:</strong> $uloziste TB</p>";
echo "<p><strong>Obsahuje SSD?</strong> $SSD</p>";
echo "<p><strong>Operacni system:</strong> $operacniSystem</p>";

echo "<h1>Datové typy</h1>"; /* Nadpis */
var_dump($nazevPocitace);
echo "<br>";
var_dump($vyrobcePocitace);
echo "<br>";
var_dump($operacniPamet);
echo "<br>";
var_dump($uloziste);
echo "<br>";
var_dump($SSD);
echo "<br>";
var_dump($operacniSystem);


