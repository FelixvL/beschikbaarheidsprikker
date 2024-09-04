werkdag applicatie <br>
<?php

require 'functies_beschikbaarheidsprikker.php';

$db_verbinding = verbinding_maken_met_database();

$result = selecteer_alles_van_tabel("gebruiker", $db_verbinding);

while($row = $result -> fetch_assoc()){
    print($row["voornaam"]."<br>");
}

?>


