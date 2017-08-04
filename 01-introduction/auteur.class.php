<?php
/*création d'une class Article
une classe est une entité regrouppant des variazable et des fonction

*/
class Auteur{
//declaration des propriété de notre class "article"
private $Nom,
        $Prenom,
        $Mail;



        /*  afin de pouvoir attribuer une valeur a mes differentes variables
         je vais metre  en place un constructeur
        */
public function __construct(
          $Nom,
          $Prenom,
          $Mail){
///ici nous alons attribuer a chaque propriété de notre class
// la valeur qui a ete passée au constructeur .
          $this->Nom                 =$Nom;
          $this->Prenom              =$Prenom;
          $this->Mail                =$Mail;


        }//fin du constructeur
/*
Getters :fonction qui vont avoir la charge de nous renvoyer nos information.
nous aurons une fonction par propieté de note classe
*/

public function getNom(){
  return $this->Nom;
}

public function getPrenom(){
  return $this->Prenom;
}

public function getMail(){
  return $this->Mail;
}


public function getNomComplet(){
  return $this->Nom.' '.$this->Prenom;
}


////Setters : fonctions qui vont  avoir la charger de modifier les propriétés de notre classe

public function setNom($MonNouveauNom){
  return $this->Nom=$MonNouveauNom;
}

public function setPrenom($MonNouveauPrenom){
  return $this->Prenom=$MonNouveauPrenom;
}

public function setMail($MonNouveauMail){
  return $this->Mail=$MonNouveauMail;
}






  }//fin de la classe article


















 ?>
