<?php


if(!empty($_SESSION['toto'])){

    require_once ("dao/DaoUtilisateur.php");

    $daoUtilisateur = new DaoUtilisateur();

    $daoUtilisateur->find($_SESSION['toto']['id']);

    $_SESSION['toto']['convoque'] = $daoUtilisateur->bean->getConvoque();

}