<?php

class Mediatheque {

    private $id=0;
    private $nom=null;
    private $taille=0;
    private $extension=null;
    private $categorie=null;

    private $leActualite = null;
    private $leUtilisateur = null;
    private $leStatut = null;
    private $leEvenement =  null;

    public function Mediatheque($id=0, $nom=null, $taille=0, $extension=null, $categorie=null) {
        $this->id=$id;
        $this->nom=$nom;
        $this->taille=$taille;
        $this->extension=$extension;
        $this->categorie=$categorie;
    }

    public function getId() {return $this->id; }
    public function getNom() {return $this->nom; }
    public function getTaille() {return $this->taille; }
    public function getExtension() {return $this->extension;}
    public function getCategorie() {return $this->categorie;}

    public function getLeActualite() {return $this->leActualite;}
    public function getLeUtilisateur() {return $this->leUtilisateur;}
    public function getLeStatut() {return $this->leStatut;}
    public function getLeEvenement() {return $this->leEvenement;}

    public function setId($id) {$this->id = $id;}
    public function setNom($nom) {$this->nom = $nom;}
    public function setTaille($taille) {$this->taille = $taille;}
    public function setExtension($extension) {$this->extension =$extension;}
    public function setCategorie($categorie) {$this->categorie=$categorie;}

    public function setLeActualite($leActualite) {$this->leActualite=$leActualite;}
    public function setLeUtilisateur($leUtilisateur) {$this->leUtilisateur=$leUtilisateur;}
    public function setLeStatut($leStatut) {$this->leStatut=$leStatut;}
    public function setLeEvenement($leEvenement) {$this->leEvenement=$leEvenement;}

}
?>null