# Wild figurines

## Les bons comptes font les bons services

#### Introduction

Vous êtes en charge du développement d'un site de e-commerce qui vend des figurines de collection. Toutes les transactions du site se font en euros (€). Mais comme les collectionneurs sont plus habitués au prix en dollars ($) ou en yens (¥), le site doit présenter ses prix dans ces deux devises en prenant en compte leur cours le plus actuel.

Seul le prix des produits en euros est saisie en base de données il faudra donc le convertir au moment d'afficher les prix sur la page de détails d'un produit.

#### Contraintes
Pour réaliser votre conversion, vous utiliserez l'API suivante : [Exchange Rate API](https://www.exchangerate-api.com/)

*Vous devrez vous enregistrer sur le site pour obtenir une clé d'API*

#### Préparez votre catalogue

Des fixtures pour préparer votre catalogue sont déjà en place, pensez donc bien à les charger pour bien démarrer votre projet.

#### Convertir les différentes devises dans la vue de détail d'un produit

Créer un Service, qui contiendra une fonction `convertEurToDollar(float euroPrice): float`. 
Cette fonction prendra en paramètre un prix en `euros` et renverra un prix en `dollar`, en utilisant l'API de conversion ([documentation](https://www.exchangerate-api.com/docs/pair-conversion-requests))

>Rappel : afin de faire appel à cette API vous disposez de l'outil [HttpClient](https://symfony.com/doc/current/http_client.html). 
La bonne nouvelle est que HttpClient est un service déjà présent dans le service container de Symfony, tu peux le réclamer par injection en utilisant la technique présente dans ton cours ;-).

Faire ensuite une fonction similaire pour convertir en yen.

#### Afficher les informations

Une fois le service créé, appeler le dans le controller pour obtenir les deux prix convertits et transmettez le tout à la vue twig dans les deux paramètres prévus à cet effet.
