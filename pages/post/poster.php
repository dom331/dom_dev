<?php

// Appel de la classe du Dao
require_once 'dao/DaoMedia.php';

if(isset($_POST['valider']) && isset($_POST['description']) && isset($_POST['nom']))
{
    $DaoMedia = new DaoMedia();

    $nom = $_POST['nom'];
    $description = $_POST['description'];

    $DaoMedia->bean->setId('')                        ;
    $DaoMedia->bean->setLib($nom)                     ;
    $DaoMedia->bean->setDescription($description)     ;
    $DaoMedia->bean->setFichier('default.gif')        ;
    $DaoMedia->bean->setType('0')                     ;
    $DaoMedia->create()                               ;

    header('Location:index.php?page=parcourir');
};