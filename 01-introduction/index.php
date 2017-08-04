<?php
include'Article.class.php';
include'Auteur.class.php';
include'Categorie.class.php';

/*
création d'une instance de la classe "Article"
ici
*/



$unArticle = new Article("la formation WF3","une formation Certifié","Rejoignez-nous a limas et vous verrez","wf3.jpg","04/08/2017");

$UnArticle = new Article("tititre1","ecole ingenieur","limas","wf3.jpg","04/08/2001");
$UnArticle2 = new Article("titre2","une formation","villefranche","www.jpg","04/01/2011");
$UnArticle3 = new Article("titre4","ecole ","Paris","sss.jpg","04/02/2017");

$unArticle2 = new Article("Titre article2","Voiture2","tes2","poo-Hugo/01-introduction/wf3.png","14/07/1984");

$unAuteur = new Auteur("helmi","zitouni","mail");
$unAuteur2 = new Auteur("fabien","parent","mail");
$unAuteur3 = new Auteur("laurent","prenom","mail");


$Auteur = new Auteur("helmi","zitouni","mail");
$Auteur2 = new Auteur("nom","prenom","mail");
$Auteur3 = new Auteur("helmi","zitouni","mail");

$unLibelle = new Categorie("Libelle1");

// on affiche l'objet article

echo '<pre>';
print_r($unArticle);
print_r($unArticle2);
echo '</pre>';

echo '<pre>';
print_r($unAuteur);
echo '</pre>';

//je veux afficher le titre de mon 1  er article

echo $unArticle->getTitre();
echo '<br>';
echo $unArticle->getAccroche();
echo '<br>';
echo $unArticle->getDescription();
echo '<br>';
echo $unArticle->getFeaturedImage();
echo '<br>';
echo $unArticle->getDateCreationArticle();
echo '<br>';


//Auteur
echo $unAuteur->getNom();
echo '<br>';
echo $unAuteur->getPrenom();
echo '<br>';
echo $unAuteur->getMail();

echo '<br>';

//Libelle
echo $unLibelle->getLibelle();
echo '<br>';



//Setters

echo '<br>'."des setter Modifié".'<br>';
echo $unArticle->setTitre("nouveau titre");
echo '<br>';
echo $unArticle->setAccroche("nouvel acroche");
echo '<br>';
echo $unArticle->setDescription("nouvelles description ");
echo '<br>';
echo $unArticle->setFeaturedImage("image2.png");
echo '<br>';
echo $unArticle->setDateCreationArticle("nouvel date de creation");
echo '<br>';

$UnArticle->setAuteur($Auteur);
$UnArticle->setAuteur($Auteur2);
$UnArticle->setAuteur($Auteur3);



echo '<br>'."des setter Modifié de Auteur".'<br>';
echo $unAuteur->setNom("nouveau nom");
echo '<br>';
echo $unAuteur->setPrenom("nouvel prenom");
echo '<br>';
echo $unAuteur->setMail("nouveau mail ");
echo '<br>';



echo '<br>'."des setter Modifié de Libelle".'<br>';
echo $unLibelle->setLibelle("nouveau Libelle");
echo '<br>';

$UneCategorie =new Categorie('Formation informatique');

$UneCategorie->AjouterUnArticle($UnArticle);
$UneCategorie->AjouterUnArticle($UnArticle2);
$UneCategorie->AjouterUnArticle($UnArticle3);

echo '<br>'."Partourir le tableau article".'<br>';
echo '<br>';

echo '<pre>';
 print_r($UneCategorie);
echo '</pre>';



echo '<hr>';
echo '<ol>';
       echo '<ul>';
       echo $UneCategorie->getLibelle();

       $articles= $UneCategorie->getCollectionArticles();


      foreach ($articles as $article):
      echo '<li>'.$article->getTitre().'-'.$article->getAuteur()->getNomComplet().'</li>';
      endforeach;

       echo '</ul>';
echo '</ol>';
echo '</hr>';

echo '<br><br><br><br><br><br><br><br>';




 ?>
