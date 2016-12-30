<?php

require_once ("dao/DaoUtilisateur.php");

$daoUtilisateur = new DaoUtilisateur();


if(isset($_POST["connexion"])){

    $daoUtilisateur->cnx($_POST['identifiant'],$_POST['psw']);

    if ($daoUtilisateur->bean->getIdentifiant()!=null){


        $_SESSION['toto']=array();

        $_SESSION['toto']['id']=$daoUtilisateur->bean->getId();
        $_SESSION['toto']['nom']=$daoUtilisateur->bean->getNom();
        $_SESSION['toto']['prenom']=$daoUtilisateur->bean->getPrenom();
        $_SESSION['toto']['mail']=$daoUtilisateur->bean->getEmail();
        $_SESSION['toto']['avatar']=$daoUtilisateur->bean->getLeAvatar();


        header('Location: index.php?page=actualites');
    }
    else{
        $_SESSION['toto']="null";
    }
}

?>