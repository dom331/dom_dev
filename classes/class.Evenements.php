<?php

class Evenements {

    private $id=0;
    private $titre=null;
    private $contenu=null;
    private $image="default.png";
    private $date=null;
    private $prix=0;
    private $a_prevoir=null;
    private $approuve=null;

    private $leAuteur = null;
    private $lesImages = array();

    public function Evenements($id=0, $titre=null, $contenu=null, $image="default.png", $date=null,  $prix=0, $a_prevoir=null, $approuve=null) {
        $this->id=$id;
        $this->titre=$titre;
        $this->contenu=$contenu;
        $this->date=date("Y-m-d");
        $this->image=$image;
        $this->prix=$prix;
        $this->a_prevoir=$a_prevoir;
        $this->approuve=$approuve;
    }

    public function getId() {return $this->id; }
    public function getTitre() {return $this->titre; }
    public function getContenu() {return $this->contenu; }
    public function getImage() {return $this->image;}
    public function getDate() {return $this->date;}
    public function getPrix() {return $this->prix;}
    public function getA_prevoir() {return $this->a_prevoir;}
    public function getApprouve() {return $this->approuve;}

    public function getLeAuteur() {return $this->leAuteur;}
    public function getLesImages() {return $this->lesImages;}

    public function setId($id) {$this->id = $id;}
    public function setTitre($titre) {$this->titre = $titre;}
    public function setContenu($contenu) {$this->contenu = $contenu;}
    public function setImage($image) {$this->image = $image;}
    public function setDate($date) {$this->date =$date;}
    public function setPrix($prix) {$this->prix=$prix;}
    public function setA_prevoir($a_prevoir) {$this->a_prevoir=$a_prevoir;}
    public function setApprouve($approuve) {$this->approuve=$approuve;}

    public function setLeAuteur($leAuteur) {$this->leAuteur=$leAuteur;}
    public function setLesImages($lesImages) {$this->lesImages=$lesImages;}

}
?>