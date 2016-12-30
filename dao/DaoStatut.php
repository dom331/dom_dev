<?php

require_once 'classes/class.Statut.php';
require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Mediatheque.php';
require_once 'Dao.php';

class DaoStatut extends Dao{

    public function DaoStatut(){
        parent::__construct();
        $this->bean = new Statut();
    }

    public function find($id){
        $donnees = $this->findById("STATUT", "ID_STATUT", $id);
        $this->bean->setId($donnees['ID_STATUT']);
        $this->bean->setLib($donnees['LIB_STATUT']);

    }

    public function create(){
        $sql = "INSERT INTO STATUT(LIB_STATUT, ID_MEDIA) VALUES(?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getLib());
        $requete->bindValue(2, $this->bean->getLeIcone()->getId());

        $requete->execute();
    }

    public function update(){

    }

    public function delete(){
    }

    public function getListe(){
        $sql = "SELECT * 
                FROM STATUT    
                ORDER BY LIB_STATUT";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $statut = new Statut(
                    $donnees['ID_STATUT'],
                    $donnees['LIB_STATUT']
                );
                $liste[] = $statut;
            }
        }
        return $liste;
    }

    public function setLeIcone(){
        $sql = "SELECT * FROM STATUT, mediatheque WHERE STATUT.ID_MEDIA = mediatheque.ID_MEDIA AND STATUT.ID_STATUT = ".$this->bean->getId();
        $requete = $this->pdo->prepare($sql);
        if($requete->execute()){
            if($donnees = $requete->fetch()){
                $icone = new Mediatheque($donnees['ID_MEDIA'], $donnees['NOM_MEDIA'], $donnees['EXTENSION_MEDIA'], $donnees['CATEGORIE_MEDIA']);
                $this->bean->setLeIcone($icone);
            }
        }
    }
    
    public function setLesUtilisateurs(){
        
    }


}