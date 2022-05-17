<?php
include_once "bd.inc.php";


function getExposition() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Exposition");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getTarifEnfant($i) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select TarifEnfant from exposition where idexposition=:idexposition");
        $req->bindValue(':idexposition', $i, PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return floatval($resultat['TarifEnfant']);
}

function getTarifAdulte($i) {
    $resultatAdulte = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select TarifAdulte from exposition where idexposition=:idexposition");
        $req->bindValue(':idexposition', $i, PDO::PARAM_INT);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultatAdulte;
}

function getIdExpoMax()
{
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select max(idexposition) from exposition");
        $req->execute();
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return intval ($resultat) ;
}

?>