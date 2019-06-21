# AstroLabs

Un astrolabs permettant aux différents astronautes de se dévouvrir

## Getting Started

Ces instructions vous permettront d'installer et d'exécuter l'application sur votre machine locale.

### Prerequisites

Voici les éléments obligatoires pour pouvoir utiliser le projet 

Seul Docker est requis !

Sinon il est toujours possible de ne pas utiliser Docker si on possède ces outils :
* PHP 7.1 minimum
* PostgreSQL
* Composer
* Node.js & yarn

### Installing and running with docker-compose

Commencer par cloner le projet :

```
https://github.com/ArthurJCQ/astro-labs.git
```

Installer les dépendances :

```
composer install
```

À partir d'ici, on peut utiliser docker-compose :

```
docker-compose up
```

Les différentes images vont automatiquement se builder.

Il faudra ensuite lancer quelques commandes dans le container contenant l'application Symfony :

```
docker-compose exec php bash
```

On peut ensuite créer la base de données :

```
sf4 do:da:cr
sf4 do:mi:mi
```

On peut ensuite générer les données de test :

```
sf4 do:fi:lo
```

L'application tourne à présent sur votre adresse localhost .

## Running the tests

Pour éxecuter les tests, rentrer dans le container docker php :

```
docker-compose exec php bash
```

Puis lancer les tests :

```
php bin/phpunit
```

## Built With

* [Symfony4](https://symfony.com/) - The web framework used
* [PostgreSQL](https://www.postgresql.org/) - For the Database
* [FosRestAPI](https://github.com/FriendsOfSymfony/FOSRestBundle) - To build the API
* [React](https://reactjs.org/) - The web app client


## Authors

* **Arthur Jacquemin** - [ArthurJCQ](https://github.com/ArthurJCQ)

Voir aussi la liste des [contributeurs](https://github.com/ArthurJCQ/astro-labs/graphs/contributors) qui ont participé à ce projet.

