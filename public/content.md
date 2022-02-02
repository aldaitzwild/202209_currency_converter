# Les Services 

## Les bons comptes font les bons services

#### Introduction

Vous êtes en charge du développement d'un site de e-commerce qui doit présenter ses prix en euros (€), en dollars ($) et en yen (¥).

Le prix des produits sera saisie en base de données en euros, et c'est à l'affichage que l'on affichera les autres devises avec une conversion en temps réél.

Pour celà, vous utiliserez l'API suivante : [Exchange Rate API](https://www.exchangerate-api.com/)

*Vous devrez vous enregistrer sur le site pour obtenir une clé d'API*

#### Créer votre catalogue

A partir d'une installation de symfony toute neuve, créer une nouvelle entité `Product` avec les champs suivants :
 - name (string)
 - description (text)
 - price (float)
 - pictureUrl (string)

Réaliser un fichier de migration et le passer en base.

Créer ensuite une fixture qui génèrera une dizaine de produit.

#### Convertir les différentes devises dans la vue de détail d'un produit

Créer un Service, qui contiendra une fonction `convertEurToDollar(float euroPrice): float`. 
Cette fonction prendra en paramètre un prix en `euros` et renverra un prix en `dollar`, en utilisant l'API de conversion ([documentation](https://www.exchangerate-api.com/docs/pair-conversion-requests))

>Rappel : afin de faire appel à cette API vous disposez de l'outil [HttpClient](https://symfony.com/doc/current/http_client.html). 
La bonne nouvelle est que HttpClient est un service déjà présent dans le service container de Symfony, tu peux le réclamer par injection en utilisant la technique présente dans ton cours ;-).

Faire ensuite une fonction similaire pour convertir en yen.

#### Afficher les informations

Une fois le service prêt, utiliser reclamer le dans l'action de votre Controller qui gère l'affichage de la vue de détail d'un produit et utilisez vos nouvelles fonctions pour convertir le prix de votre produit. Il suffit ensuite de transmettre vos prix en dollar et en yen à Twig pour que vous puissez les afficher dans votre template.
