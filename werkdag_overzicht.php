<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <?php
$maand = date('m');
echo $maand."!!";
require 'functies_beschikbaarheidsprikker.php';

$db_verbinding = verbinding_maken_met_database();

$result = selecteer_alles_van_tabel("gebruiker", $db_verbinding);
echo "<table class=\"table\">";
$date = new DateTime();
$days = $date->format('t');
echo "<tr><th>Naam</th>";
 for ($y = 1; $y < $days+1; $y++){
   echo "<th>$y</th>";
 }
echo "</tr>";

while($row = $result -> fetch_assoc()){
    if($_GET["gebid"]==$row["id"]){
        echo "<tr><td><b>".$row["voornaam"]."</b></td>";
    }else{
        echo "<tr><td>".$row["voornaam"]."</td>";
    }
    
    for($x = 0; $x < $days; $x++){
        echo "<td>x</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
