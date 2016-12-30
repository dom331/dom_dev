<?php

require_once 'dao/DaoUtilisateur.php';

if (isset($_POST['soumettre'])){
    
    if(!empty($_POST['identifiant'])){

        $dao = new DaoUtilisateur();
        
            $dao->bean->setIdentifiant($_POST['identifiant']);
            $dao->bean->setPsw($_POST['mdp']);
            $dao->bean->setEmail($_POST['email']);
            $dao->bean->setLeAvatar($_POST['avatar']);
            $dao->bean->setLeGroupe($_POST['groupe']);
//        var_dump($dao) or die();
        
        $dao->create();
        
        
        
        
    }
    else{
        echo "erreur";
    }
}

   





?>