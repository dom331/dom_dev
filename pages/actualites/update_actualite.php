<?php

require_once ("dao/DaoActualite.php");


$daoActualite = new DaoActualite();

$id = $_GET['id'];
$daoActualite->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoActualite->bean->getId();
$infos['oui']['titre']=$daoActualite->bean->getTitre();
$infos['oui']['contenu']=$daoActualite->bean->getContenu();
$infos['oui']['image']=$daoActualite->bean->getImage();
$infos['oui']['date']=$daoActualite->bean->getDate();
$infos['oui']['responsables']=$daoActualite->bean->getResponsables();


//var_dump($param) or die();
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
"liste" => $infos,
"notifs" => $notifs);

if(isset($_POST['soumettre'])) {

    if (!empty($_POST['titre'])){
        $daoActualite->bean->setTitre($_POST['titre']);
        $daoActualite->updateTitre();
        header('Location: index.php?page=article&id='.$daoActualite->bean->getId());
    }
    
    if (!empty($_FILES['fichier'])) {

        $image = $_FILES['fichier']['name'];

        if (move_uploaded_file($_FILES['fichier']['tmp_name'], "media/uploads/actualites/" . $image)) {
            $daoActualite->bean->setImage($image);
            $daoActualite->updateImage();
            header('Location: index.php?page=article&id='.$daoActualite->bean->getId());
        }
    }

    if (!empty($_POST['description'])){
        $daoActualite->bean->setContenu($_POST['description']);
        $daoActualite->updateContenu();
        header('Location: index.php?page=article&id='.$daoActualite->bean->getId());
    }


    if (!empty($_POST['responsables'])){
        $daoActualite->bean->setResponsables($_POST['responsables']);
        $daoActualite->updateResponsables();
        header('Location: index.php?page=article&id='.$daoActualite->bean->getId());
    }



}



?>