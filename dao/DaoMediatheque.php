<?php

require_once 'classes/class.Statut.php';
require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Actualite.php';
require_once 'classes/class.Evenements.php';
require_once 'classes/class.Mediatheque.php';
require_once 'Dao.php';

class DaoMediatheque extends Dao{

    public function DaoMediatheque(){
        parent::__construct();
        $this->bean = new Mediatheque();
    }

    public function find($id){
        $donnees = $this->findById("mediatheque", "ID_MEDIA", $id);
        $this->bean->setId($donnees['ID_MEDIA']);
        $this->bean->setNom($donnees['NOM_MEDIA']);
        $this->bean->setTaille($donnees['TAILLE_MEDIA']);
        $this->bean->setExtension($donnees['EXTENSION_MEDIA']);
        $this->bean->setCategorie($donnees['CATEGORIE_MEDIA']);

    }

    public function create(){
        $sql = "INSERT INTO mediatheque(NOM_MEDIA, TAILLE_MEDIA, EXTENSION_MEDIA, CATEGORIE_MEDIA, ID_ACTUALITE, ID_EVENEMENT, ID_UTILISATEUR, ID_STATUT) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getNom());
        $requete->bindValue(2, $this->bean->getTaille());
        $requete->bindValue(3, $this->bean->getExtension());
        $requete->bindValue(4, $this->bean->getCategorie());
        $requete->bindValue(5, $this->bean->getLeActualite()->getId());
        $requete->bindValue(6, $this->bean->getLeEvenement()->getId());
        $requete->bindValue(7, $this->bean->getLeUtilisateur()->getId());
        $requete->bindValue(8, $this->bean->getLeStatut()->getId());

        $requete->execute();
    }

    public function update(){

    }

    public function delete(){
    }

    public function getListe(){
        $sql = "SELECT * 
                FROM mediatheque    
                ORDER BY NOM_MEDIA";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $mediatheque = new Mediatheque(
                    $donnees['ID_MEDIA'],
                    $donnees['NOM_MEDIA'],
                    $donnees['TAILLE_MEDIA'],
                    $donnees['EXTENSION_MEDIA'],
                    $donnees['CATEGORIE_MEDIA']
                );
                $liste[] = $mediatheque;
            }
        }
        return $liste;
    }

    public function setLeActualite(){

    }

    public function setLeUtilisateur(){

    }

    public function setLeStatut(){

    }

    public function setLeEvenement(){

    }


}