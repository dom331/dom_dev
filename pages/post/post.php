<?php
// Appel de la classe du Dao
require_once 'dao/DaoMedia.php';
// Création d'un DaoBataille
$dao = new DaoMedia();

// Demande de la liste des batailles
$dao->find($_GET['id']);
$media = $dao->bean;

// On passe le liste des batailles en paramètre pour la vue
// à chaque template demandé
$param = array("media" => $media);

