<?php

class Site_web{

    private $id = 0;
    private $url = null;
    private $nom = null;

    private $leUtilisateur = null;

    public function Site_web($id=0, $url = null, $nom = null){
        $this->id = $id;
        $this->url = $url;
        $this->nom = $nom;
    }

    public function getId() {return $this->id;}
    public function getUrl() {return $this->url;}
    public function getNom() {return $this->nom;}

    public function getLeUtilisateur(){return $this->leUtilisateur;}


    public function setId($id) {$this->id = $id;}
    public function setUrl($url) {$this->url = $url;}
    public function setNom($nom) {$this->nom = $nom;}

    public function setLeUtilisateur($leUtilisateur) {$this->leUtilisateur=$leUtilisateur;}


}
?>
