<?php

require_once 'dao/DaoActualite.php';

if(isset($_POST["soumettre"])) {

    if (
        array_key_exists("titre", $_POST)
        && array_key_exists("contenu", $_POST)
        && array_key_exists("responsables", $_POST)
    ) {
        $dao = new DaoActualite();

        $dao->bean->setTitre($_POST["titre"]);
        $dao->bean->setContenu($_POST["contenu"]);
        $dao->bean->setDate(date("Y-m-d"));
        $dao->bean->setResponsables($_POST["responsables"]);
        $dao->bean->setLeAuteur((int)$_SESSION['toto']['id']);
//        var_dump($dao) or die();
        $dao->create();
        header('Location: index.php?page=actualites');
    }   else {
        echo  "erreur";
    }
}