 <?php
 require 'functies_beschikbaarheidsprikker.php';

 toon_website_header("werkdag_overzicht","beschikbaarheidprikker");


$maand = date('m');
$date = new DateTime();
$days = $date->format('t');


$db_verbinding = verbinding_maken_met_database();

$result = selecteer_alles_van_tabel("gebruiker", $db_verbinding);

echo "<table class=\"table\">";

echo "<tr><th>Naam</th>";
for ($y = 1; $y < $days+1; $y++){
    echo "<th>$y</th>";
}
echo "</tr>";

while($row = $result -> fetch_assoc()){
    echo "<tr>";
    echo "<td>".beslis_dikgedrukt(krijg_path_variabele("gebid"), $row["id"], $row["voornaam"])."</td>";
    for($x = 0; $x < $days; $x++){
        echo "<td><button onclick=\"zie_beschikbaarheidsmogelijkheden()\">X</button></td>";
        
    }
    echo "</tr>";
}

echo "</table>";

toon_website_footer();

?>


