<?php

require_once ("dao/DaoEvenements.php");


$daoEvenement = new DaoEvenements();

$id = $_GET['id'];
$daoEvenement->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoEvenement->bean->getId();
$infos['oui']['titre']=$daoEvenement->bean->getTitre();
$infos['oui']['contenu']=$daoEvenement->bean->getContenu();
$infos['oui']['image']=$daoEvenement->bean->getImage();
$infos['oui']['date']=$daoEvenement->bean->getDate();
$infos['oui']['prix']=$daoEvenement->bean->getPrix();
$infos['oui']['a_prevoir']=$daoEvenement->bean->getA_prevoir();
//            $daoEvenement->setLesImages(); // Il n'y a pas d'images appartenant aux articles : A FAIRE
//            $infos['oui']['avatar']=$daoEvenement->bean->getLesImages();

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

if (isset($_POST["oui"])){
//    var_dump($daoEvenement) or die();
    $daoEvenement->delete();

    header('Location: index.php?page=evenements');
}

if (isset($_POST["non"])){
    header('Location: index.php?page=evenements');
}


?>