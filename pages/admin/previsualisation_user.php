<?php
require_once ("dao/DaoUtilisateur.php");


$daoUtilisateur = new DaoUtilisateur();

$id = $_GET['id'];
$daoUtilisateur->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoUtilisateur->bean->getId();
$infos['oui']['nom']=$daoUtilisateur->bean->getNom();
$infos['oui']['prenom']=$daoUtilisateur->bean->getPrenom();
$infos['oui']['image']=$daoUtilisateur->bean->getImage();
$infos['oui']['date_inscription']=$daoUtilisateur->bean->getDate_inscription();
$infos['oui']['email']=$daoUtilisateur->bean->getEmail();


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

if (isset($_POST['valider'])) {
    $daoUtilisateur->bean->setApprouve(1);
    $daoUtilisateur->updateApprouve();
    header('Location: index.php?page=administration');
}

if (isset($_POST['supprimer'])) {
    $daoUtilisateur->delete();
    header('Location: index.php?page=administration');
}

?>