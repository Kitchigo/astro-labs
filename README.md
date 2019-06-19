# AstroLabs

Un astrolabs permettant aux différents astronautes de se dévouvrir

## Getting Started

Ces instructions vous permettront d'installer et d'exécuter l'application sur votre machine locale.

### Prerequisites

Voici les éléments obligatoires pour pouvoir utiliser le projet 

* PHP 7.1 minimum
* PostgreSQL
* Composer
* Node.js & yarn

### Installing

Commencer par cloner le projet :

```
https://github.com/ArthurJCQ/astro-labs.git
```

Installer les dépendances :

```
composer install
```

```
yarn
```

Changer la variable d'environnement DATABASE_URL dans un nouveau fichier .env.local à votre convenance.

Créer la BDD :

```
php bin/console doctrine:databse:create
```

Effectuer les migrations

```
php bin/console do:mi:mi
```

Pour builder les assets avec Webpack Encore :

```
yarn encore dev
```

Vous pouvez ensuite lancer votre serveur de développement.


## Running the tests

Pour éxecuter les tests :

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

Voir aussi la liste des [contributeurs](https://github.com/your/project/contributors) qui ont participé à ce projet.

