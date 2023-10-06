TD n°2
======

Exercice 1 : Feu tricolore, la suite
------------------------------------

#### Nouveau feu

![](feuBicolore.png)

Nous souhaitons maintenant ajouter un feu qui n'a que deux couleurs, rouge et vert, et passe de l'une à l'autre alternativement.

1. Modifiez votre diagramme de classe en conséquence.
2. Implémentez ce nouveau feu.
3. Modifiez votre `main` pour tester ce nouveau feu.

#### Gestionnaire d'affichage

Vous avez très certainement une gestion de l'affichage du texte au niveau du feu ou au niveau du client (c'est déjà un peu mieux).

4. Quel principe de conception n'est pas respecté en procédant ainsi ?

Pour anticiper la mise en place d'une interface graphique, nous souhaitons déléguer la gestion de l'affichage de l'état du feu à une ou plusieurs classes dédiées.

5. Y aurait-il un Design Pattern adapté à cette problématique ?
6. Quelle que soit la réponse à la question précédente, proposez une mise à jour de votre modélisation UML avec ce Design Pattern.
7. Implémentez cette modélisation et adaptez le reste de votre code en conséquence.

Exercice 2 : Cars 2
-------------------

![](copyright.png)

La gestion du texte pour le feu tricolore semble bien fonctionner. Nous décidons donc de déléguer l'affichage à une ou plusieurs autres classes pour notre application `Cars`.

1. Utilisez le même design pattern que pour l'exercice précédent pour proposer une modélisation qui externalise la gestion de l'affichage du texte en limitant les dépendances.
2. Implémentez votre solution.

Attention, il y aura probablement des variations par rapport à l'exercice précédent car le problème n'est pas tout à fait identique.

Bonus (feu tricolore)
---------------------

Pour les plus rapides, modélisez puis implémentez une Factory des différents modes de feu.
