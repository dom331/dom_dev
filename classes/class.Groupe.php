<?php

class Groupe{

    private $id = 0;
    private $nom = null;
    private $annee = null;
    private $id_parent = null;
    private $pedagogique = null;

    private $lesUtilisateurs = array();
   

    public function Groupe($id=0, $nom=null, $annee = null, $id_parent = null, $pedagogique = null){
        $this->id = $id;
        $this->nom = $nom;
        $this->annee = $annee;
        $this->id_parent = $id_parent;
        $this->pedagogique = $pedagogique;
    }

    public function getId() {return $this->id;}
    public function getNom() {return $this->nom;}
    public function getAnnee() {return $this->annee;}
    public function getId_parent() {return $this->id_parent;}
    public function getPedagogique() {return $this->pedagogique;}

    public function getLesUtilisateurs(){return $this->lesUtilisateurs;}



    public function setId($id) {$this->id = $id;}
    public function setNom($nom) {$this->nom = $nom;}
    public function setAnnee($annee) {$this->annee = $annee;}
    public function setId_parent($id_parent) {$this->id_parent = $id_parent;}
    public function setPedagogique($pedagogique) {$this->pedagogique = $pedagogique;}

    public function setLesUtilisateurs($lesUtilisateurs) {$this->lesUtilisateurs=$lesUtilisateurs;}


}
?>
