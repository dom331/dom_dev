<?php

require_once 'dao/DaoEvenements.php';

$dao = new DaoEvenements();

$liste = $dao->getListe();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoEvenements();

    $dao->find($liste[$i]->getId());
    $dao->setLeAuteur();
    $liste[$i] = $dao->bean;

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
$param = array(
    "liste" => $liste,
    "notifs" => $notifs);
//var_dump($param) or die();
