werkdag applicatie <br>
<?php
require 'functies_beschikbaarheidsprikker.php';

$mysqli = verbinding_maken_met_database();
$result = selecteer_alles_van_tabel("gebruiker",$mysqli);
while($row = $result -> fetch_assoc()){
    print($row["voornaam"]."<br>");
}
?>


