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
        $infos['oui']['a_prevoir']=$daoEvenement->bean->getA_prevoir();
        //            $daoEvenement->setLesImages(); // Il n'y a pas d'images appartenant aux articles : A FAIRE
        //            $infos['oui']['avatar']=$daoEvenement->bean->getLesImages();
        
    $param=array("liste" =>$infos);

//var_dump($param) or die();




?>