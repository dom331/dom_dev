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

$param=array("liste" =>$infos);

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