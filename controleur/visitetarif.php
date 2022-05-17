<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";


// recuperation des donnees GET, POST, et SESSION
;
$checkedexpo = Array();
$nbEnfant=0;
$nbAdulte=0;
$tarif=0;
if(isset($_POST["nbadulte"]) && isset($_POST["nbenfant"])) {
    $nbAdulte = $_POST["nbadulte"];
    $nbEnfant = $_POST["nbenfant"];
    $lastExpoID = getLastExpoId();
}
//var_dump($lastExpoID);


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$listeExpo = getexposition();


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des restaurants répertoriés";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreationVisite.php";
include "$racine/vue/pied.html.php";


?>
