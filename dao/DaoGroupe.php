<?php

require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Groupe.php';
require_once 'Dao.php';

class DaoGroupe extends Dao{

    public function DaoGroupe(){
        parent::__construct();
        $this->bean = new Groupe();
    }

    public function find($id){
        $donnees = $this->findById("groupe_utilisateur", "ID_GROUPE", $id);
        $this->bean->setId($donnees['ID_GROUPE']);
        $this->bean->setNom($donnees['NOM_GROUPE']);
        $this->bean->setAnnee($donnees['ANNEE_GROUPE']);
        $this->bean->setId_parent($donnees['ID_PARENT']);
        $this->bean->setPedagogique($donnees['PEDAGOGIQUE']);

    }

    public function create(){
        $sql = "INSERT INTO groupe_utilisateur(NOM_GROUPE, ANNEE_GROUPE, ID_PARENT, PEDAGOGIQUE) VALUES(?, ?, ?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getNom());
        $requete->bindValue(2, $this->bean->getAnnee());
        $requete->bindValue(3, $this->bean->getId_parent());
        $requete->bindValue(4, $this->bean->getPedagogique());

        $requete->execute();
    }

    public function update(){

    }

    public function delete(){
    }

    public function getListe(){
        $sql = "SELECT * 
                FROM groupe_utilisateur   
                ORDER BY ANNEE_GROUPE";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $groupe_utilisateur = new Groupe(
                    $donnees['ID_GROUPE'],
                    $donnees['NOM_GROUPE'],
                    $donnees['ANNEE_GROUPE'],
                    $donnees['ID_PARENT'],
                    $donnees['PEDAGOGIQUE']
                );
                $liste[] = $groupe_utilisateur;
            }
        }
        return $liste;
    }

    public function setLesUtilisateurs(){

    }
    
    public function addUtilisateur(){
        
    }
    
    public function deleteUtilisateur(){
        
    }


}