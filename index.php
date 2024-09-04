werkdag applicatie <br>

<script>
    function naarGebruiker(p){
        window.open("werkdag_overzicht.php?gebid="+p); // door een parameter mee te geven pakt ie de gebruiker van de button
    }
    </script>

<?php
require 'functies_beschikbaarheidsprikker.php';

$mysqli = verbinding_maken_met_database();
$result = selecteer_alles_van_tabel("gebruiker",$mysqli);
while($row = $result -> fetch_assoc()){
    print($row["voornaam"]);
    echo '<button onclick="naarGebruiker('.$row["id"].')" class="naarGebruiker">Naar gebruiker</button>'; 
    echo '<br>';
}
?>


