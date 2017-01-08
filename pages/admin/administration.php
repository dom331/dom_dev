<?php

require_once 'dao/DaoEvenements.php';
require_once 'dao/DaoUtilisateur.php';

/////////////////////////////////////////////////////// LISTE DES EVENEMENTS NON APPROUVE ////////////////////////////

$dao = new DaoEvenements();

$liste = $dao->listeAprob();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoEvenements();

    $dao->find($liste[$i]->getId());
    $dao->setLeAuteur();
    $liste[$i] = $dao->bean;

}

/////////////////////////////////////////////////////// LISTE DES UTILISATEURS NON APPROUVE ////////////////////////////

$daoUtilisateur = new DaoUtilisateur();

$utilisateurs = $daoUtilisateur->getNonApprouve();

for($i=0;$i<count($utilisateurs); $i++){

    $daoUtilisateur = new DaoUtilisateur();

    $daoUtilisateur->find($utilisateurs[$i]->getId());
    $daoUtilisateur->setLeGroupe();
    $utilisateurs[$i] = $daoUtilisateur->bean;

}



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

$param = array("utilisateurs" => $utilisateurs,
    "liste" => $liste,
    "notifs" => $notifs);

//var_dump($param) or die();