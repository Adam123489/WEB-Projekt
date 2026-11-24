<?php
echo "<h1>Úkol A</h1>";
for ($i = 1; $i <= 10; $i++) {
if ($i < 9) {
    echo "<p>$i</p>";
}
}
echo "<h1>Úkol C</h1>";
$number = 7;
for ($i = 1; $i <= $number; $i++) {

}
for ($i = 1; $i <= 20; $i++) {
    if ($i%2 == 0) {
        echo "<p>$i</p>";
    }
}
echo "<h2>Úkol 2</h2>";
echo "<h1>Úkol A, B</h1>";
$movies = ["Jurský svět", "Jurský svět: Zánik říše", "Jurský svět: Nadvláda", "Black Adam"];
echo $movies[0], "<br>";
echo $movies[3];
$movies[] = "Iron Man";
echo "<br>";
echo "Počet filmů v poli: " . count($movies);

echo "<ul>";;
foreach ($movies as $movie) {
    echo "<li>$movie</li>";
}
echo "</ul>";
echo "<br>";
echo "<h1>Úkol C</h1>";
$grades = [1, 2, 1, 3, 2, 1, 4];
$grades = 1 + 2 + 1 + 3 + 2 + 1 + 4;
foreach ($grades as $grade) {
    $grade = $grades[1] / 7;

}
