<?php
// Appel de la classe du Dao
require_once 'dao/DaoMedia.php';

if(isset($_GET["id"])){
// Création d'un DaoBataille
    $dao = new DaoMedia();
// Demande de la liste des batailles
    $media = $dao->find($_GET["id"]);
    $media = $dao->bean;
// Parcours de la liste pour rechercher
// pour chaque bataille les informations utiles à la page

// On passe le liste des batailles en paramètre pour la vue
// à chaque template demandé
    $param = array("media" => $media);
    if(isset($_GET["confirm"])){
        $dao->delete();
        header('Location:index.php?page=supprimerPost');
    }elseif(isset($_GET["unconfirm"])){
        header('Location:index.php?page=supprimerPost');
    }

}

