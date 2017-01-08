<?php

if(isset($_SESSION["toto"])) {
    header('Location: index.php?page=actualites');
}
require_once 'dao/DaoUtilisateur.php';

if (isset($_POST['soumettre'])){

    if(!empty($_POST['nom'])){

        $dao = new DaoUtilisateur();

        $dao->bean->setNom(ucwords($_POST['nom']));
        $dao->bean->setPrenom(ucwords($_POST['prenom']));
        $dao->bean->setIdentifiant($_POST['identifiant']);
        $dao->bean->setPsw($_POST['mdp']);
        $dao->bean->setEmail($_POST['email']);
        $dao->bean->setDate_inscription(date("Y-m-d"));
        $dao->bean->setImage("default.png");
        $dao->bean->setEx_mmi(0);
        $dao->bean->setAdmin(0);
        $dao->bean->setApprouve(0);
//            $dao->bean->setLeAvatar(null);
        $dao->bean->setLeGroupe(2);
//        var_dump($dao) or die();
        $dao->create();
        header('Location: index.php');



    }
    else{
        echo "erreur";
    }
}







?>