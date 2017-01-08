<?php

require_once 'dao/DaoActualite.php';
//var_dump($_SESSION) or die();
$dao = new DaoActualite();

$liste = $dao->getListePerdu();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoActualite();

    $dao->find($liste[$i]->getId());

    $liste[$i] = $dao->bean;

}

//var_dump($param) or die();

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


?>