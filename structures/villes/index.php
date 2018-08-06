<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
    function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$array = array(
    array(
        "Ville"=>"SAINT-TRIVIER-SUR-MOIGNANS",
        "Departement"=>"01",
        "Latitude"=>"46.0667",
        "Longitude"=>"4.9",
        "Population"=>"1900",
        "Densite"=>"44"),
    array(
        "Ville"=>"OULCHES-LA-VALLEE-FOULON",
        "Departement"=>"02",
        "Latitude"=>"49.4333",
        "Longitude"=>"3.75",
        "Population"=>"100",
        "Densite"=>"14"),
    array(
        "Ville"=>"MARIOL",
        "Departement"=>"03",
        "Latitude"=>"46.0167",
        "Longitude"=>"3.5",
        "Population"=>"800",
        "Densite"=>"80"),
    array(
        "Ville"=>"BELLAFFAIRE",
        "Departement"=>"04",
        "Latitude"=>"44.4167",
        "Longitude"=>"6.18333",
        "Population"=>"100",
        "Densite"=>"10"),
    array(
        "Ville"=>"LE POET",
        "Departement"=>"05",
        "Latitude"=>"44.2833",
        "Longitude"=>"5.88333",
        "Population"=>"700",
        "Densite"=>"46"),
    array(
        "Ville"=>"ALCAY-ALCABEHETY-SUNHARETTE",
        "Departement"=>"64",
        "Latitude"=>"43.095",
        "Longitude"=>"-0.908889",
        "Population"=>"200",
        "Densite"=>"6"),
    array(
        "Ville"=>"LES ANGLES",
        "Departement"=>"65",
        "Latitude"=>"43.0833",
        "Longitude"=>"0.016667",
        "Population"=>"100",
        "Densite"=>"40"),
    array(
        "Ville"=>"LA QUEUE-EN-BRIE",
        "Departement"=>"94",
        "Latitude"=>"48.7833",
        "Longitude"=>"2.58333",
        "Population"=>"11400",
        "Densite"=>"1242"),
    array(
        "Ville"=>"LOC-EGUINER-SAINT-THEGONNEC",
        "Departement"=>"29",
        "Latitude"=>"48.4667",
        "Longitude"=>"-3.96667",
        "Population"=>"300",
        "Densite"=>"39"),
    array(
        "Ville"=>"SAINT-HILAIRE-DE-LA-NOAILLE",
        "Departement"=>"33",
        "Latitude"=>"44.6012",
        "Longitude"=>"0.00166667",
        "Population"=>"400",
        "Densite"=>"32"),
    array(
        "Ville"=>"MARCIAC",
        "Departement"=>"32",
        "Latitude"=>"43.5333",
        "Longitude"=>"0.166667",
        "Population"=>"1200",
        "Densite"=>"60"),
    array(
        "Ville"=>"RAMONVILLE-SAINT-AGNE",
        "Departement"=>"31",
        "Latitude"=>"43.55",
        "Longitude"=>"1.46667",
        "Population"=>"11600",
        "Densite"=>"1856"),
    array(
        "Ville"=>"MARENNES",
        "Departement"=>"17",
        "Latitude"=>"45.8167",
        "Longitude"=>"-1.11667",
        "Population"=>"5500",
        "Densite"=>"279"),
    array(
        "Ville"=>"HALLENNES-LEZ-HAUBOURDIN",
        "Departement"=>"59",
        "Latitude"=>"50.3333",
        "Longitude"=>"3.75",
        "Population"=>"300",
        "Densite"=>"101"),
    array(
        "Ville"=>"PAU",
        "Departement"=>"64",
        "Latitude"=>"43.3",
        "Longitude"=>"-0.366667",
        "Population"=>"84000",
        "Densite"=>"2575"),
    array(
        "Ville"=>"HERES",
        "Departement"=>"65",
        "Latitude"=>"43.55",
        "Longitude"=>"0",
        "Population"=>"100",
        "Densite"=>"21")
);

sort($array);

echo build_table($array);

?>
</body>
</html>