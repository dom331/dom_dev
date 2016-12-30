<?php

class Statut{

    private $id = 0;
    private $lib = null;

    private $lesUtilisateurs = array();
    private $leIcone = null;

    public function Statut($id=0, $lib=null){
        $this->id = $id;
        $this->lib = $lib;
    }

    public function getId() {return $this->id;}
    public function getLib() {return $this->lib;}

    public function getLesUtilisateurs(){return $this->lesUtilisateurs;}
    public function getLeIcone(){return $this->leIcone;}


    public function setId($id) {$this->id = $id;}
    public function setLib($lib) {$this->lib = $lib;}

    public function setLesUtilisateurs($lesUtilisateurs) {$this->lesUtilisateurs=$lesUtilisateurs;}
    public function setLeIcone($leIcone) {$this->leIcone=$leIcone;}

}
?>
