<?php

require_once ("dao/DaoActualite.php");


$daoActualite = new DaoActualite();

$id = $_GET['id'];
$daoActualite->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoActualite->bean->getId();
$infos['oui']['titre']=$daoActualite->bean->getTitre();
$infos['oui']['contenu']=$daoActualite->bean->getContenu();
$infos['oui']['image']=$daoActualite->bean->getImage();
$infos['oui']['date']=$daoActualite->bean->getDate();
$infos['oui']['responsables']=$daoActualite->bean->getResponsables();


if (isset($_POST["oui"])){
//    var_dump($daoActualite) or die();
    $daoActualite->delete();

    header('Location: index.php?page=objetsperdus');
}

if (isset($_POST["non"])){
    header('Location: index.php?page=objetsperdus');
}




//NOTIFS

require_once ('dao/DaoUtilisateur.php');
require_once ('dao/DaoEvenements.php');
$daoU = new DaoUtilisateur();

$liste2 = $daoU->getNonApprouve();

$users = count($liste2);

$daoE = new DaoEvenements();

$liste3 = $daoE->listeAprob();

$events = count($liste3);

$notifs['number'] = array();
$notifs['number']['oui'] = $events + $users;

$param = array(
    "liste" => $infos,
    "notifs" => $notifs);

//var_dump($param) or die();












?>