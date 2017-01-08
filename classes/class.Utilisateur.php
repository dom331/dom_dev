<?php

class Utilisateur {

    private $id=0;
    private $nom=null;
    private $prenom=null;
    private $identifiant=null;
    private $psw=null;
    private $email=null;
    private $description=null;
    private $image=null;
    private $convoque=0;
    private $date_inscription=null;
    private $admin=null;
    private $ex_mmi=null;
    private $approuve=null;
    private $date_naiss=null;

    private $lesActualites = array();
    private $lesSites = array();
    private $lesStatuts = array();
    private $lesEvenements =  array();
    private $leGroupe =  null;
    private $leAvatar =  null;

    public function Utilisateur($id=0, $nom=null, $prenom=null, $identifiant=null, $psw=null, $email=null,
                                $description=null, $image=null, $convoque=0, $date_inscription=null, $admin=null, $ex_mmi=null,
                                $approuve=null, $date_naiss=null) {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->identifiant=$identifiant;
        $this->psw=$psw;
        $this->email=$email;
        $this->description=$description;
        $this->image=$image;
        $this->convoque=$convoque;
        $this->date_inscription=$date_inscription;
        $this->admin=$admin;
        $this->ex_mmi=$ex_mmi;
        $this->approuve=$approuve;
        $this->date_naiss=$date_naiss;
    }

    public function getId() {return $this->id; }
    public function getNom() {return $this->nom; }
    public function getPrenom() {return $this->prenom; }
    public function getIdentifiant() {return $this->identifiant;}
    public function getPsw() {return $this->psw;}
    public function getEmail() {return $this->email;}
    public function getDescription() {return $this->description;}
    public function getImage() {return $this->image;}
    public function getConvoque() {return $this->convoque;}
    public function getDate_inscription() {return $this->date_inscription;}
    public function getAdmin() {return $this->admin;}
    public function getEx_mmi() {return $this->ex_mmi;}
    public function getApprouve() {return $this->approuve;}
    public function getDate_naiss() {return $this->date_naiss;}

    public function getLesActualites() {return $this->lesActualites;}
    public function getLesSites() {return $this->lesSites;}
    public function getLesStatuts() {return $this->lesStatuts;}
    public function getLesEvenements() {return $this->lesEvenements;}
    public function getLeGroupe() {return $this->leGroupe;}
    public function getLeAvatar() {return $this->leAvatar;}

    public function setId($id) {$this->id = $id;}
    public function setNom($nom) {$this->nom = $nom;}
    public function setPrenom($prenom) {$this->prenom=$prenom;}
    public function setIdentifiant($identifiant) {$this->identifiant = $identifiant;}
    public function setPsw($psw) {$this->psw = $psw;}
    public function setEmail($email) {$this->email = $email;}
    public function setDescription($description){$this->description = $description;}
    public function setImage($image){$this->image = $image;}
    public function setConvoque($convoque){$this->convoque=$convoque;}
    public function setDate_inscription($date_inscription) {$this->date_inscription = $date_inscription;}
    public function setAdmin($admin) {$this->admin = $admin;}
    public function setEx_mmi($ex_mmi) {$this->ex_mmi = $ex_mmi;}
    public function setApprouve($approuve) {$this->approuve = $approuve;}
    public function setDate_naiss($date_naiss){$this->date_naiss = $date_naiss;}

    public function setLesActualites($lesActualites){$this->lesActualites=$lesActualites;}
    public function setLesSites($lesSites) {$this->lesSites=$lesSites;}
    public function setLesStatuts($lesStatus) {$this->lesStatuts=$lesStatus;}
    public function setLesEvenements($lesEvenements) {$this->lesEvenements=$lesEvenements;}
    public function setLeGroupe($leGroupe) {$this->leGroupe=$leGroupe;}
    public function setLeAvatar($leAvatar) {$this->leAvatar=$leAvatar;}

}
?>