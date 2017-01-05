<?php

require_once 'classes/class.Utilisateur.php';
require_once 'classes/class.Evenements.php';
require_once 'classes/class.Mediatheque.php';
require_once 'Dao.php';

class DaoEvenements extends Dao{

    public function DaoEvenements(){
        parent::__construct();
        $this->bean = new Evenements();
    }

    public function find($id){
        $donnees = $this->findById("evenements", "ID_EVENEMENT", $id);
        $this->bean->setId($donnees['ID_EVENEMENT']);
        $this->bean->setTitre($donnees['TITRE_EVENEMENT']);
        $this->bean->setContenu($donnees['CONTENU_EVENEMENT']);
        $this->bean->setImage($donnees['IMAGE']);
        $this->bean->setDate($donnees['DATE_EVENEMENT']);
        $this->bean->setPrix($donnees['PRIX_EVENEMENT']);
        $this->bean->setA_prevoir($donnees['A_PREVOIR_EVENEMENT']);
        $this->bean->setApprouve($donnees['EVENEMENT_APPROUVE']);

    }

    public function create(){
        $sql = "INSERT INTO evenements(TITRE_EVENEMENT, CONTENU_EVENEMENT, IMAGE, DATE_EVENEMENT, PRIX_EVENEMENT, A_PREVOIR_EVENEMENT, EVENEMENT_APPROUVE, ID_UTILISATEUR) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getTitre());
        $requete->bindValue(2, $this->bean->getContenu());
        $requete->bindValue(3, $this->bean->getImage());
        $requete->bindValue(4, $this->bean->getDate());
        $requete->bindValue(5, $this->bean->getPrix());
        $requete->bindValue(6, $this->bean->getA_prevoir());
        $requete->bindValue(7, $this->bean->getApprouve());
        $requete->bindValue(8, $this->bean->getLeAuteur());

        $requete->execute();
    }

    public function update(){
        $sql ="UPDATE evenements
               SET EVENEMENT_APPROUVE = ?
               WHERE ID_EVENEMENT = ?";
        $requete = $this->pdo->prepare($sql);
        $requete->bindValue(1, $this->bean->getApprouve());
        $requete->bindValue(2, $this->bean->getId());
        $requete->execute();
    }

    public function delete(){
        $sql ="DELETE 
               FROM evenements
               WHERE evenements.ID_EVENEMENT = ?";

        $requete = $this->pdo->prepare($sql);

        $requete->bindValue(1, $this->bean->getId());

        $requete->execute();
    }

    public function getListe(){
        $sql = "SELECT * 
                FROM evenements    
                ORDER BY DATE_EVENEMENT DESC";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $evenements = new Evenements(
                    $donnees['ID_EVENEMENT'],
                    $donnees['TITRE_EVENEMENT'],
                    $donnees['CONTENU_EVENEMENT'],
                    $donnees['IMAGE'],
                    $donnees['DATE_EVENEMENT'],
                    $donnees['PRIX_EVENEMENT'],
                    $donnees['A_PREVOIR_EVENEMENT'],
                    $donnees['EVENEMENT_APPROUVE']
                );
                $liste[] = $evenements;
            }
        }
        return $liste;
    }

    public function setLeAuteur(){
        $sql = "SELECT * FROM evenements, utilisateur
        WHERE evenements.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
        AND evenements.ID_EVENEMENT = ".$this->bean->getId();
        $requete = $this->pdo->prepare($sql);
        if($requete->execute()){
            if($donnees = $requete->fetch()){
                $auteur = new Utilisateur($donnees['ID_UTILISATEUR'], $donnees['NOM_UTILISATEUR'], $donnees['PRENOM_UTILISATEUR'],
                    $donnees['IDENTIFIANT_UTILISATEUR'], $donnees['PSW_UTILISATEUR'], $donnees['EMAIL_UTILISATEUR'],
                    $donnees['DESCRIPTION_UTILISATEUR'], $donnees['DATE_INSCRIPTION'], $donnees['ADMIN'],
                $donnees['EX_MMI'], $donnees['UTILISATEUR_APPROUVE'], $donnees['DATE_NAISS']);
                $this->bean->setLeAuteur($auteur);
            }
        }

    }

    public function setLesImages(){

    }
    
    public function addImage($image)
    {
        $sql = "INSERT INTO mediatheque(NOM_MEDIA, TAILLE_MEDIA, EXTENSION_MEDIA, CATEGORIE_MEDIA, ID_ACTUALITE, ID_EVENEMENT, ID_UTILISATEUR, ID_STATUT) 
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        
        $requete = $this->pdo->prepare($sql);
        
        $requete->bindValue(1, $image->getNom());
        $requete->bindValue(2, $image->getTaille());
        $requete->bindValue(3, $image->getExtension());
        $requete->bindValue(4, $image->getCategorie());
        $requete->bindValue(5, $image->getLeActualite());
        $requete->bindValue(6, $image->getLeEvenement());
        $requete->bindValue(7, $image->getLeUtilisateur());
        $requete->bindValue(8, $image->getLeStatut());

        $requete->execute();
    }
    
    public function deleteImage(){
        
    }
    
    public function addAuteur(){
        
    }
    
    public function deleteAuteur(){
        
    }

    public function listeAprob(){
        $sql = "SELECT *
                FROM evenements
                WHERE evenements.EVENEMENT_APPROUVE = 0 or NULL
                ORDER BY DATE_EVENEMENT DESC";
        $requete = $this->pdo->prepare($sql);
        $liste = array();
        if($requete->execute()){
            while($donnees = $requete->fetch()){
                $evenements = new Evenements(
                    $donnees['ID_EVENEMENT'],
                    $donnees['TITRE_EVENEMENT'],
                    $donnees['CONTENU_EVENEMENT'],
                    $donnees['IMAGE'],
                    $donnees['DATE_EVENEMENT'],
                    $donnees['PRIX_EVENEMENT'],
                    $donnees['A_PREVOIR_EVENEMENT'],
                    $donnees['EVENEMENT_APPROUVE']
                );
                $liste[] = $evenements;
            }
        }
        return $liste;
    }

}