<?php
set_time_limit(3600);
$time_start = time(true);
$nb = range(1,49);
$test1 = array();
$monTirage = array(7,13,18,36,40);
shuffle ($monTirage);
echo 'La table de 1 à 49';
var_dump ($nb);
echo '<br>Mon tirage shuffle';
var_dump ($monTirage);
echo '<br>Les *n* tirages';

/* for ($i = 1; $i <= 5; $i++){
    $nbRand = (array_rand($nb));
    var_dump ($nbRand);
} */

for ($i = 1; $i <= 10; $i++){
    $nbRand = (array_rand($nb,5));
    shuffle ($nbRand);
    var_dump ($nbRand);
    $test1 = array_merge($test1, $nbRand);
    if (in_array($monTirage,$test1)){
        echo "C'est gagné<br>";
    } else {
        echo "Dommage<br><br>";
    }
}
echo '<br>Itérations dans les tables';
$count = array_count_values($test1);
arsort ($count);
var_dump ($count);
echo '<br>Savoir si les chiffres de mon tirage sont dans les différente tirages';

$resultat = array_intersect($monTirage, $test1);
arsort ($resultat);
var_dump ($resultat);
echo '<br>';

echo 'Pour en arriver la s\'est passé : '.(time(true) - $time_start).' secondes.';

?>