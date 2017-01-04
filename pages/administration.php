<?php

require_once 'dao/DaoEvenements.php';

$dao = new DaoEvenements();

$liste = $dao->listeAprob();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoEvenements();

    $dao->find($liste[$i]->getId());
    $dao->setLeAuteur();
    $liste[$i] = $dao->bean;

}

$param = array("liste" => $liste);
