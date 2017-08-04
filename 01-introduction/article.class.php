<?php
/*création d'une class Article
une classe est une entité regrouppant des variazable et des fonction

*/
class Article{
//declaration des propriété de notre class "article"
private $Titre,
        $Accroche,
        $Description,
        $FeaturedImage,
        $DateCreationArticle;
private $Auteur ;
        /*  afin de pouvoir attribuer une valeur a mes differentes variables
         je vais metre  en place un constructeur
        */
public function __construct(
          $Titre,
          $Accroche,
          $Description,
          $FeaturedImage,
          $DateCreationArticle){
///ici nous alons attribuer a chaque propriété de notre class
// la valeur qui a ete passée au constructeur .
          $this->Titre                 =$Titre;
          $this->Accroche              =$Accroche;
          $this->Description           =$Description;
          $this->FeaturedImage         =$FeaturedImage;
          $this->DateCreationArticle   =$DateCreationArticle;

        }//fin du constructeur
/*
Getters :fonction qui vont avoir la charge de nous renvoyer nos information.
nous aurons une fonction par propieté de note classe
*/

public function getTitre(){
  return $this->Titre;
}

public function getAccroche(){
  return $this->Accroche;
}

public function getDescription(){
  return $this->Description;
}

public function getFeaturedImage(){
  return $this->FeaturedImage;
}

public function getDateCreationArticle(){
  return $this->DateCreationArticle;
}


////Setters : fonctions qui vont  avoir la charger de modifier les propriétés de notre classe

public function setTitre($MonNouveauTitre){
  $this->Titre=$MonNouveauTitre;
}

public function setAccroche($MonNouveauAccroche){
   $this->Accroche=$MonNouveauAccroche;
}

public function setDescription($MonNouveauDescription){
   $this->Description=$MonNouveauDescription;
}

public function setFeaturedImage($MonNouveauFeaturedImage){
 $this->FeaturedImage=$MonNouveauFeaturedImage;
}

public function setDateCreationArticle($MonNouveauDateCreationArticle){
   $this->DateCreationArticle=$MonNouveauDateCreationArticle;
}

public function setAuteur(Auteur $Auteur){
   $this->Auteur=$Auteur;
}




public function getAuteur()
{
return $this->Auteur;
}






  }//fin de la classe article



 ?>
