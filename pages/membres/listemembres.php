<?php

require_once ("dao/DaoUtilisateur.php");

$daoUtilisateur = new DaoUtilisateur();

$liste = $daoUtilisateur->getListe();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoUtilisateur();

    $dao->find($liste[$i]->getId());

    $liste[$i] = $dao->bean;

}

$param = array("liste" => $liste);


//var_dump($param) or die();
