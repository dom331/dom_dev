<?php


require_once ("dao/DaoUtilisateur.php");

$daoUtilisateur = new DaoUtilisateur();


if(isset($_POST["connexion"])) {

    $daoUtilisateur->cnx($_POST['identifiant'], $_POST['psw']);
    $approuve = (int)$daoUtilisateur->bean->getApprouve();

    if ($approuve == 0) {
        session_destroy();
        echo "<h1 class='name'> Votre compte n'a pas encore été approuvé </h1>";
        header('Location: index.php');
    } else {


        if ($daoUtilisateur->bean->getIdentifiant() != null) {


            $_SESSION['toto'] = array();

            $_SESSION['toto']['id'] = $daoUtilisateur->bean->getId();
            $_SESSION['toto']['nom'] = $daoUtilisateur->bean->getNom();
            $_SESSION['toto']['prenom'] = $daoUtilisateur->bean->getPrenom();
            $_SESSION['toto']['mail'] = $daoUtilisateur->bean->getEmail();
            $_SESSION['toto']['admin'] = $daoUtilisateur->bean->getAdmin();
            $_SESSION['toto']['avatar'] = $daoUtilisateur->bean->getImage();
            $_SESSION['toto']['description'] = $daoUtilisateur->bean->getDescription();
            
            

            header('Location: index.php?page=actualites');

        }
    }

}

//var_dump($notifs) or die();




?>