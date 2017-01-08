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

        $date = explode("/", $_POST["date"]); //Explode les / afin de mettre format y-m-j
        $dao->bean->setDate($date[2]."-".$date[0]."-".$date[1]);

        $dao->bean->setPrix($_POST["prix"]);
        $dao->bean->setA_prevoir($_POST['a_prevoir']);
        $dao->bean->setApprouve("0");
        $dao->bean->setLeAuteur((int)$_SESSION['toto']['id']);

        $image = $_FILES['oui']['name'];

        if(move_uploaded_file($_FILES['oui']['tmp_name'], "media/uploads/evenements/".$image)){
            $dao->bean->setImage($image);
        }
//        var_dump($dao) or die();
        $dao->create();
        header('Location: index.php?page=evenements');

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
