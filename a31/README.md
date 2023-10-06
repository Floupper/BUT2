A31 - Analyse (Conception Orientée Objet)
=========================================

#### IMPORTANT : Il sera impératif de savoir utiliser ce dépôt pour le TP noté.

Pour démarrer, vous devez :
1. Mettre en place une clé SSH en suivant le tuto [GITLABSSH.md](GITLABSSH.md)
2. Mettre en place votre environnement de travail en suivez les instructions ci-dessous.

Ensuite, pour utiliser de votre dépôt, regardez la page [HOWTO.md](HOWTO.md).

#### Les diapos des cours :

- [CM n°1 : Principes et patrons de conception](http://adrien.krahenbuhl.fr/courses/IUTRS/A31/CM1/)
- [CM n°2 : Observer & MVC](http://adrien.krahenbuhl.fr/courses/IUTRS/A31/CM2/)
- [CM n°3 : Java Swing](http://adrien.krahenbuhl.fr/courses/IUTRS/A31/CM3/)
- [CM n°4 : Facade, Decorator & Composite](http://adrien.krahenbuhl.fr/courses/IUTRS/A31/CM4/)

#### Moodle

- [Les QCM](https://moodle.unistra.fr/course/view.php?id=737)


1 - Créer un **clône distant** sur Gitlab
-----------------------------------------

Il suffit de cliquer sur le bouton "Fork" en haut de la page, à côté du bouton bleu "Clone".

**À FAIRE** : Ajouter votre enseignant de TP en tant que "Reporter" de votre dépôt via le menu "Manage -> Members".

2 - Créer un **clône local** sur votre ordinateur
-------------------------------------------------

1. Installer git sur votre ordinateur personnel (rien à faire sur les postes de l'IUT) :
```sh
$ sudo apt install git
```

2. Configurer vos informations d'utilisateur :
```sh
$ git config --global user.name "[Prenom] [Nom]"
$ git config --global user.email "[login]@unistra.fr"
```

3. Cloner votre fork :
```sh
$ git clone git@git.unistra.fr:[login]/a31.git
```

3 - Ajouter le **remote "prof"**
--------------------------------

En trois commandes :
```sh
$ cd a31
$ git remote add prof git@git.unistra.fr:a313/a31.git
$ git fetch prof
```

Si tout s'est bien passé, la commande :
```sh
$ git remote -v
```
affiche :
```sh
origin	git@git.unistra.fr:[login)]/a31.git (fetch)
origin	git@git.unistra.fr:[login]/a31.git (push)
prof	git@git.unistra.fr:a313/a31.git (fetch)
prof	git@git.unistra.fr:a313/a31.git (push)
```
