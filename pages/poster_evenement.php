<?php

require_once 'dao/DaoEvenements.php';

if(isset($_POST["soumettre"])) {

    if (
        array_key_exists("titre", $_POST)
        && array_key_exists("contenu", $_POST)
        && array_key_exists("date", $_POST)
    ) {
        $dao = new DaoEvenements();

        $dao->bean->setTitre($_POST["titre"]);
        $dao->bean->setContenu($_POST["contenu"]);
        $dao->bean->setDate($_POST["date"]);
        $dao->bean->setLeAuteur($_SESSION['toto']['id']);
        $dao->create();
}   else {
    echo  "erreur";
    }
}