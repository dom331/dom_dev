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

$param = array("liste" => $liste);

/////////////////////////////////////////////////////// LISTE DES UTILISATEURS NON APPROUVE ////////////////////////////

$daoUtilisateur = new DaoUtilisateur();

$utilisateurs = $daoUtilisateur->getNonApprouve();

for($i=0;$i<count($utilisateurs); $i++){

    $daoUtilisateur = new DaoUtilisateur();

    $daoUtilisateur->find($utilisateurs[$i]->getId());
    $daoUtilisateur->setLeGroupe();
    $utilisateurs[$i] = $daoUtilisateur->bean;

}

$param = array("utilisateurs" => $utilisateurs);
