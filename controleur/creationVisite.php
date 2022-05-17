<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$checkedexpo = Array();
$nbEnfant=0;
$nbAdulte=0;
$tarif=0;
if(isset($_Post["nbAdulte"]) && isset($_Post["nbEnfants"])) {
    $nbAdulte = $_POST["nbAdulte"];
    $nbEnfant = $_POST["nbEnfant"];
    $lastExpoID = getLastExpoId();
}

// traitement si necessaire des donnees recuperees
;
//$tarifAdulte = getTarifAdulte();
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "nom";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreationVisite.php";
include "$racine/vue/pied.html.php";


?>