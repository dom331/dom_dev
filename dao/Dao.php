<?php
    
class Dao{
    
    public $bean=null;  
    public $pdo=null; 
        
    public function Dao() {
        // Instanciation pdo
        $parametres = parse_ini_file("param/param.ini");
        // connexion à la bdd avec fichier de paramètres
        $this->pdo = new PDO(
            $parametres['dsn'],
            $parametres['user'], 
            $parametres['psw'],
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        ); 
    }        

    public function findById($table=null, $colonne = null, $valeur=0){
        $sql = "SELECT * FROM ".$table." WHERE ".$colonne." = ".$valeur;       
        $requete = $this->pdo->prepare($sql);
        if($requete->execute()){
            if($donnees = $requete->fetch()){
                return $donnees;
            }
        }
    }
    
    public function deleteById($table=null, $colonne = null, $valeur=0){
        $sql = "DELETE FROM ".$table." WHERE ".$colonne." = ".$valeur;
        $requete = $this->pdo->prepare($sql);
        $requete->execute();
    }
    
    
}