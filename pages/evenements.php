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

$param = array("liste" => $liste);
//var_dump($param) or die();
