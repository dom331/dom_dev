<?php
// Appel de la classe du Dao
require_once 'dao/DaoMedia.php';

if(isset($_GET["id"])){
    header('Location:index.php?page=confirmDeletePost&id='.$_GET["id"]);
}



// Création d'un DaoBataille
$dao = new DaoMedia();
// Demande de la liste des batailles
$liste = $dao->getListe();
// Parcours de la liste pour rechercher
// pour chaque bataille les informations utiles à la page
for($i=0;$i<count($liste); $i++){
// On recréé un DaoBataille
    $dao = new DaoMedia();
// Recherche de la bataille concernée
    $dao->find($liste[$i]->getId());
// Remplacement de la bataille par celle du bean du dao
    $liste[$i] = $dao->bean;
}
// On passe le liste des batailles en paramètre pour la vue
// à chaque template demandé
$param = array("liste" => $liste);

