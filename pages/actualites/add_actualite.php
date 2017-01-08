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
        $dao->bean->setPerdu($_POST['perdu']);
        $dao->bean->setUrgent($_POST['urgent']);

        if ($_FILES['oui'] != null) {

            $image = $_FILES['oui']['name'];
//var_dump($image) or die();
            if (move_uploaded_file($_FILES['oui']['tmp_name'], "media/uploads/actualites/" . $image)) {
                $dao->bean->setImage($image);
            }
        }
        else{
            $dao->bean->setImage("default.png");
        }
//        var_dump($dao) or die();
        $dao->create();
        header('Location: index.php?page=actualites');
    }   else {
        echo  "erreur";
    }
}
require_once ('dao/DaoUtilisateur.php');
require_once ('dao/DaoEvenements.php');
$daoU = new DaoUtilisateur();

$liste2 = $daoU->getNonApprouve();

$users = count($liste2);

$daoE = new DaoEvenements();

$liste3 = $daoE->listeAprob();

$events = count($liste3);

$notifs['number'] = array();
$notifs['number']['oui'] = $events + $users;

$param = array(
    "notifs" => $notifs);