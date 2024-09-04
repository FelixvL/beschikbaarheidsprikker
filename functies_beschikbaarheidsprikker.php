<?php
function verbinding_maken_met_database(){
    $mysqli = new mysqli("localhost","root","","beschikbaarheidsprikker");
    return $mysqli;
}
function selecteer_alles_van_tabel($tabelnaam, $verbinding){
    $sql = "SELECT * FROM $tabelnaam";
    $result = $verbinding -> query($sql);
    return $result;
}

?>