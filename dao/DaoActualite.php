<?php

require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Mediatheque.php';
require_once 'classes/class.Actualite.php';
require_once 'Dao.php';

class DaoActualite extends Dao{

    public function DaoActualite(){
        parent::__construct();
        $this->bean = new Actualite();
    }

    public function find($id){
        $donnees = $this->findById("actualite", "ID_ACTUALITE", $id);
        $this->bean->setId($donnees['ID_ACTUALITE']);
        $this->bean->setTitre($donnees['TITRE_ACTUALITE']);
        $this->bean->setContenu($donnees['CONTENU_ACTUALITE']);
        $this->bean->setImage($donnees['IMAGE']);
        $this->bean->setDate($donnees['DATE_ACTUALITE']);
        $this->bean->setResponsables($donnees['RESPONSABLES_ACTUALITE']);

    }

    public function create(){
        $sql = "INSERT INTO actualite(TITRE_ACTUALITE, CONTENU_ACTUALITE, IMAGE, DATE_ACTUALITE, RESPONSABLES_ACTUALITE, ID_UTILISATEUR) 
                VALUES(?, ?, ?, ?, ?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getTitre());
        $requete->bindValue(2, $this->bean->getContenu());
        $requete->bindValue(3, $this->bean->getImage());
        $requete->bindValue(4, $this->bean->getDate());
        $requete->bindValue(5, $this->bean->getResponsables());
        $requete->bindValue(6, $this->bean->getLeAuteur());

        $requete->execute();
    }

    public function update(){

    }

    public function delete(){

        $sql ="DELETE 
               FROM actualite
               WHERE actualite.ID_ACTUALITE = ?";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getId());

        $requete->execute();

    }

    public function getListe(){
        $sql = "SELECT * 
                FROM actualite    
                ORDER BY DATE_ACTUALITE DESC";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){


                $actualite = new Actualite(
                    $donnees['ID_ACTUALITE'],
                    $donnees['TITRE_ACTUALITE'],
                    $donnees['CONTENU_ACTUALITE'],
                    $donnees['IMAGE'],
                    $donnees['DATE_ACTUALITE'],
                    $donnees['RESPONSABLES_ACTUALITE']
                
                );
                $liste[] = $actualite;
            }
        }
        return $liste;
    }

    public function setLeAuteur(){

    }

    public function setLesImages(){

            $sql = "SELECT * FROM actualite, mediatheque WHERE actualite.ID_ACTUALITE = mediatheque.ID_ACTUALITE AND actualite.ID_ACTUALITE = " . $this->bean->getId();
            $requete = $this->pdo->prepare($sql);
            if ($requete->execute()) {
                if ($donnees = $requete->fetch()) {
                    $images = new Mediatheque($donnees['ID_MEDIA'], $donnees['NOM_MEDIA'], $donnees['EXTENSION_MEDIA'], $donnees['CATEGORIE_MEDIA']);
                    $this->bean->setLesImages($images);
                }
            }

    }
    
    public function addImage(){
        
    }
    
    public function deleteImage(){
        
    }
    
    public function addAuteur(){
        
    }
    
    public function deleteAuteur(){
        
    }
    
    
}