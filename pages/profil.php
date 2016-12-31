<?php

require_once ("dao/DaoUtilisateur.php");

if (array_key_exists("id", $_GET)){
        $daoUtilisateur = new DaoUtilisateur();
        $id = $_GET['id'];

        $daoUtilisateur->find($id);

        $infos['toto']=array();

        $infos['toto']['id']=$daoUtilisateur->bean->getId();
        $infos['toto']['nom']=$daoUtilisateur->bean->getNom();
        $infos['toto']['prenom']=$daoUtilisateur->bean->getPrenom();
        $infos['toto']['mail']=$daoUtilisateur->bean->getEmail();


}
else{
        echo "Erreur";

}

?>