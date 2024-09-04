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
function toon_website_header($pagina_naam, $pagina_h1_titel){
echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>".$pagina_naam."</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
  </head>
  <body>
    <h1>".$pagina_h1_titel."</h1>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
";

}
function krijg_path_variabele($path_id){
    return $_GET[$path_id];
}
function beslis_dikgedrukt($meegegeven, $uitdb, $woord){
    if($meegegeven==$uitdb){
        return "<b>".$woord."</b>";
    }else{
        return $woord;
    } 
}

function toon_website_footer(){
    echo "
    </body>
    </html>
   ";
    
    }

    
    
    ?>

    <script>
function zie_beschikbaarheidsmogelijkheden(){
    alert();
}
</script>