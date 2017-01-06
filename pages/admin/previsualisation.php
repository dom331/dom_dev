<?php

require_once ("dao/DaoEvenements.php");


$daoEvenement = new DaoEvenements();

$id = $_GET['id'];
$daoEvenement->find($id);

$infos['oui'] = array();

$infos['oui']['id']=$daoEvenement->bean->getId();
$infos['oui']['titre']=$daoEvenement->bean->getTitre();
$infos['oui']['contenu']=$daoEvenement->bean->getContenu();
$infos['oui']['image']=$daoEvenement->bean->getImage();
$infos['oui']['date']=$daoEvenement->bean->getDate();
$infos['oui']['prix']=$daoEvenement->bean->getPrix();
$infos['oui']['approuve']=$daoEvenement->bean->getApprouve();
$infos['oui']['a_prevoir']=$daoEvenement->bean->getA_prevoir();
$daoEvenement->setLeAuteur();
$infos['oui']['auteurNom']=$daoEvenement->bean->getLeAuteur()->getNom();
$infos['oui']['auteurPrenom']=$daoEvenement->bean->getLeAuteur()->getPrenom();

$param=array("liste" =>$infos);

//var_dump($param) or die();

if(isset($_POST['valider'])){
    $daoEvenement->bean->setApprouve("1");
    $daoEvenement->update();
    header('Location: index.php?page=administration');
}

if(isset($_POST['suppr'])){
    $daoEvenement->delete();
    header('Location: index.php?page=administration');
}


?>