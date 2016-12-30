<?php

require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Site_web.php';
require_once 'Dao.php';

class DaoSite_web extends Dao{

    public function DaoSite_web(){
        parent::__construct();
        $this->bean = new Site_web();
    }

    public function find($id){
        $donnees = $this->findById("site_web", "ID_SITE", $id);
        $this->bean->setId($donnees['ID_SITE']);
        $this->bean->setUrl($donnees['URL_SITE']);
        $this->bean->setNom($donnees['NOM_URL']);

    }

    public function create(){
        $sql = "INSERT INTO site_web(URL_SITE, NOM_SITE, ID_UTILISATEUR) VALUES(?, ?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getUrl());
        $requete->bindValue(2, $this->bean->getNom());
        $requete->bindValue(3, $this->bean->getLeUtilisateur()->getId());

        $requete->execute();
    }

    public function update(){

    }

    public function delete(){
    }

    public function getListe(){
        $sql = "SELECT * 
                FROM site_web    
                ORDER BY NOM_SITE";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $site_web = new Site_web(
                    $donnees['ID_SITE'],
                    $donnees['URL_SITE'],
                    $donnees['NOM_SITE']
                );
                $liste[] = $site_web;
            }
        }
        return $liste;
    }

    public function setLeUtilisateur(){

    }


}