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
        $_SESSION['toto']['admin']=$daoUtilisateur->bean->getAdmin();
        $_SESSION['toto']['avatar']=$daoUtilisateur->bean->getImage();
        $_SESSION['toto']['description']=$daoUtilisateur->bean->getDescription();

//    $daoUtilisateur->setLeAvatar();
//
//        $_SESSION['toto']['avatar']=array();
//        $_SESSION['avatar']['nom']=$daoUtilisateur->bean->getLeAvatar()->getNom();
//var_dump($_SESSION) or die();

        header('Location: index.php?page=actualites');
    }
}

?>