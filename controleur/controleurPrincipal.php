<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "visitetarif.php";
    $lesActions["tarif"] = "visitetarif.php";


    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>