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
        $dao->bean->setPrix($_POST["prix"]);
        $dao->bean->setA_prevoir($_POST['a_prevoir']);
        $dao->bean->setLeAuteur((int)$_SESSION['toto']['id']);
//        var_dump($dao) or die();
        $dao->create();
        header('Location: index.php?page=evenements');
}   else {
    echo  "erreur";
    }
}