# Projet pour Site de Sushi - Cours ErgoINT
Comem+ / HEIG-VD 2015

## Prérequis

You'll need to have the following items installed before continuing.

  * [Node.js](http://nodejs.org): Use the installer provided on the NodeJS website.
  * [Grunt](http://gruntjs.com/): Run `[sudo] npm install -g grunt-cli`
  * [Bower](http://bower.io): Run `[sudo] npm install -g bower`

## Installation

Pour installer le projet, il faut aller [là](http://foundation.zurb.com/docs/sass.html) et lire la doc. Sous Windows, aucune idée comment ça marche. Sous mac et linux, il faut avoir les prérequis ci-dessus qui sont installés. J'utilise la méthode Libsass. 

Lorsque vous faites `git clone` sur ce projet, les fichiers de bases viennent avec, mais il n'y aura notamment pas de **CSS**. Il faudra le générer grâce au fichiers sass. Pour cela, on va utiliser **grunt**. On a donc pas besoin de **ruby** pour que ça fonctionne.

La première fois, il faudra lancer un "bower update" qui va mettre à jour les composants et créer un répértoire "bower_components".

Cette commande, une fois lancée, va _watcher_ le répertoire sass (entre autres) pour générer du css _onzeflaille_.

```bash
grunt
```

## Pages ##

- Accueil
- Carte (catégories)
- Listing produits
- Produit Detail
- Compte (anciennes commandes, etc.)
- Panier
- Infos

Le reste à suivre.
