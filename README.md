EXPRESSIONS DES BESOINS
=======================

Vous êtes une équipe de développeurs chargée de réaliser une interface permettant de saisir et visualiser sur une carte du monde les derniers chiffres de la propagation du Covid-19 dans les pays suivants:

- Chine
- Usa
- France
- Allemagne
- Royaume-Uni
- Italie
- Turquie
- Algérie
- Tunisie
- Maroc
- Congo
- Mali
- Afrique du sud
- Australie
- Brésil
- Mexique

Les chiffres à afficher:

- le nombre de nouveaux cas dans les dernieres 24 heures
- le nombre de décés dans les dernieres 24 heures
- le nombre de guérisons dans les dernieres 24 heures

Il faudra sauvegarder dans une base de données ce chiffres, jour après jour.
nom de la base : covid
tables: Pays (id_pays, nom_pays) et Cas(id_cas, new_cas, deces, guerison, date)

La saisie de ces statistiques se fera au travers d'un formulaire.
Les requêtes à la base de données avec Ajax.

En outre, il faudra une liste déroulante dans laquelle on choisi un pays.
Une fois sélectionné,l'application devra afficher les trois courbes pour ce pays en utilisant material-line-charts :
https://developers.google.com/chart/interactive/docs/gallery/linechart?hl=fr#creating-material-line-charts


