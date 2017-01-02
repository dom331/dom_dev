<?php

require_once ("dao/DaoActualite.php");


$daoActualite = new DaoActualite();

        $id = $_GET['id'];
        $daoActualite->find($id);

            $infos['oui'] = array();

            $infos['oui']['id']=$daoActualite->bean->getId();
            $infos['oui']['titre']=$daoActualite->bean->getTitre();
            $infos['oui']['contenu']=$daoActualite->bean->getContenu();
            $infos['oui']['date']=$daoActualite->bean->getDate();
            $infos['oui']['responsables']=$daoActualite->bean->getResponsables();
//            $daoActualite->setLesImages(); // Il n'y a pas d'images appartenant aux articles : A FAIRE
//            $infos['oui']['avatar']=$daoActualite->bean->getLesImages();

    $param=array("liste" =>$infos);

//var_dump($param) or die();




?>