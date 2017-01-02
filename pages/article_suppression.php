<?php

require_once ("dao/DaoActualite.php");


$daoActualite = new DaoActualite();

$id = $_GET['id'];
$daoActualite->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoActualite->bean->getId();
$infos['oui']['titre']=$daoActualite->bean->getTitre();
$infos['oui']['contenu']=$daoActualite->bean->getContenu();
$infos['oui']['date']=$daoActualite->bean->getDate();
$infos['oui']['responsables']=$daoActualite->bean->getResponsables();
//            $daoActualite->setLesImages(); // Il n'y a pas d'images appartenant aux articles : A FAIRE --> Si on set les images, modifier la méthode delete()
//            $infos['oui']['avatar']=$daoActualite->bean->getLesImages();

$param=array("liste" =>$infos);

//var_dump($param) or die();

if (isset($_POST["oui"])){
//    var_dump($daoActualite) or die();
    $daoActualite->delete();

    header('Location: index.php?page=actualites');
}

if (isset($_POST["non"])){
    header('Location: index.php?page=actualites');
}













?>