<?php
// include'Article.class.php';

/*création d'une class Article
une classe est une entité regrouppant des variazable et des fonction

*/
class Categorie{
//declaration des propriété de notre class "article"
private $Libelle;
private $CollectionArticles=[];
        /*  afin de pouvoir attribuer une valeur a mes differentes variables
         je vais metre  en place un constructeur
        */
public function __construct($Libelle){
///ici nous alons attribuer a chaque propriété de notre class
// la valeur qui a ete passée au constructeur .
          $this->Libelle   =$Libelle;



        }//fin du constructeur
/*
Getters :fonction qui vont avoir la charge de nous renvoyer nos information.
nous aurons une fonction par propieté de note classe
*/

public function getLibelle(){
  return $this->Libelle;
}


public function getCollectionArticles(){
  return $this->CollectionArticles;
}





////Setters : fonctions qui vont  avoir la charger de modifier les propriétés de notre classe

public function setLibelle($MonNouveauLibelle){
  return $this->Libelle=$MonNouveauLibelle;

}


public function AjouterUnArticle(Article $Article){
$this->CollectionArticles[]=$Article;


}




  }//fin de la classe article


















 ?>
