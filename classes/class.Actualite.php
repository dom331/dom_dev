<?php

class Actualite{

    private $id = 0;
    private $titre = null;
    private $contenu = null;
    private $date = null;
    private $responsables = null;

    private $leAuteur = null;
    private $lesImages = array();

    public function Actualite($id=0, $titre=null,$contenu=null,$date=null,$responsables=null){
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
        $this->responsables = $responsables;
    }

    public function getId() {return $this->id;}
    public function getTitre() {return $this->titre;}
    public function getContenu() {return $this->contenu;}
    public function getDate() {return $this->date;}
    public function getResponsables() {return $this->responsables;}

    public function getLeAuteur(){return $this->leAuteur;}
    public function getLesImages(){return $this->lesImages;}


    public function setId($id) {$this->id = $id;}
    public function setTitre($titre) {$this->titre = $titre;}
    public function setContenu($contenu) {$this->contenu = $contenu;}
    public function setDate($date) {$this->date = $date;}
    public function setResponsables($responsables) {$this->responsables = $responsables;}

    public function setLeAuteur($leAuteur) {$this->leAuteur=$leAuteur;}
    public function setLesImages($lesImages) {$this->lesImages=$lesImages;}

}
?>
