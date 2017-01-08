<?php

require_once ("dao/DaoUtilisateur.php");


        $daoUtilisateur = new DaoUtilisateur();

        $id = $_GET['id'];
        $daoUtilisateur->find($id);

        $infos['oui'] = array();

        $infos['oui']['id']=$daoUtilisateur->bean->getId();
        $infos['oui']['nom']=$daoUtilisateur->bean->getNom();
        $infos['oui']['prenom']=$daoUtilisateur->bean->getPrenom();
        $infos['oui']['email']=$daoUtilisateur->bean->getEmail();
        $infos['oui']['description']=$daoUtilisateur->bean->getDescription();
        $infos['oui']['date_inscription']=$daoUtilisateur->bean->getDate_inscription();
        $infos['oui']['avatar']=$daoUtilisateur->bean->getImage();
        $infos['oui']['convoque']=$daoUtilisateur->bean->getConvoque();
        $infos['oui']['naiss']=$daoUtilisateur->bean->getDate_naiss();
//        $daoUtilisateur->setLeAvatar();
//        $infos['oui']['avatar']=$daoUtilisateur->bean->getLeAvatar()->getNom();


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

if (isset($_POST['convoque'])){
        $daoUtilisateur->bean->setConvoque(1);
        $daoUtilisateur->updateConvoque();
        header('Location: index.php?page=viescolaire');
}

if (isset($_POST['annuler_conv'])){
        $daoUtilisateur->bean->setConvoque(0);
        $daoUtilisateur->updateConvoque();
        header('Location: #');
}


?>