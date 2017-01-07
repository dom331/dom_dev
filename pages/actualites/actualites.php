<?php

require_once 'dao/DaoActualite.php';
//var_dump($_SESSION) or die();
$dao = new DaoActualite();

$liste = $dao->getListe();

for($i=0;$i<count($liste); $i++){

    $dao = new DaoActualite();

    $dao->find($liste[$i]->getId());

    $liste[$i] = $dao->bean;

}

$param = array("liste" => $liste);

