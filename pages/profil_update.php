<?php

require_once ("dao/DaoUtilisateur.php");


$daoUtilisateur = new DaoUtilisateur();

$id = $_GET['id'];
$daoUtilisateur->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoUtilisateur->bean->getId();
$infos['oui']['nom']=$daoUtilisateur->bean->getNom();
$infos['oui']['prenom']=$daoUtilisateur->bean->getPrenom();
$infos['oui']['email']=$daoUtilisateur->bean->getEmail();
$infos['oui']['description']=$daoUtilisateur->bean->getDescription();
$infos['oui']['date_inscription']=$daoUtilisateur->bean->getDate_inscription();
$infos['oui']['avatar']=$daoUtilisateur->bean->getImage();
//        $daoUtilisateur->setLeAvatar();
//        $infos['oui']['avatar']=$daoUtilisateur->bean->getLeAvatar()->getNom();

$param=array("liste" =>$infos);

//var_dump($param) or die();

if(isset($_POST['soumettre'])) {

    if (!empty($_FILES['fichier'])) {

    $image = $_FILES['fichier']['name'];

    if (move_uploaded_file($_FILES['fichier']['tmp_name'], "media/interface/" . $image)) {
        $daoUtilisateur->bean->setImage($image);
        $daoUtilisateur->updateImage();
        header('Location: index.php?page=profil&id='.$daoUtilisateur->bean->getId());
    }
}

    if (!empty($_POST['description'])){
        $daoUtilisateur->bean->setDescription($_POST['description']);
        $daoUtilisateur->updateDescription();
        header('Location: index.php?page=profil&id='.$daoUtilisateur->bean->getId());
    }


    if (!empty($_POST['email'])){
        $daoUtilisateur->bean->setEmail($_POST['email']);
        $daoUtilisateur->updateEmail();
        header('Location: index.php?page=profil&id='.$daoUtilisateur->bean->getId());
    }

    if (!empty($_POST['naiss'])){
        $daoUtilisateur->bean->setDate_Naiss($_POST['naiss']);
        $daoUtilisateur->updateDate_Naiss();
        header('Location: index.php?page=profil&id='.$daoUtilisateur->bean->getId());
    }



}



?>