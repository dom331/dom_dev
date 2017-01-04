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
?>