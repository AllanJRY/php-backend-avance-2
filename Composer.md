## Composer

Composer s'utilise dans un terminal, pour le télécharger : https://getcomposer.org/download/

Commande pour initialiser Composer dans un projet :
```shell
composer init 
```
Cette commande va générer un dossier vendor qui stockera toutes vos dépendances, un fichier composer.json pour définir/paramétrer les dépendances de vos projets, et un composer.lock, qui va faire en sorte de bloquer les versions de dépendances à installer pour ne pas se retrouver avec une dépendance trop à jour.


Afficher la version de composer :
```shell
composer -V 
```

Mettre à jour Composer :
```shell
composer self-update
```

Afficher les commandes disponibles :
```shell
composer
```

Pour trouver une dépendance a ajouter dans votre projet : https://packagist.org/

Commande ajouter une dépendance :
```shell
composer require ramsey/uuid
```

Commande ajouter une dépendance seulement utilisée lors du développement :
```shell
composer require symfony/var-dumper --dev
```

Supprimer une dépendance :
```shell
composer remove ramsey/uuid
```

Mettre à jour les dépendances du projet :
```shell
composer update
```

## L'autoloader

En premier lieu pour mettre en place l'autoloader dans un projet, il faut initialiser Composer (Si ce n'est pas déjà fait):
```shell
composer init
```

En suite dans votre composer.json, il faut définir une propriété autoloader en lui indiquant le psr souhaité et où aller chercher vos classes.
```json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }
},
```

Dans votre index.php il faut maintenant inclure l'autoloader de composer en ajoutant cette ligne :
```php
require_once('vendor/autoload.php');
```

Vous n'avez plus qu'à créer vos classes dans le dossier src (ou autre, suivant votre config du composer.json) et leur déclarer un namespace commençant par App\ (encore une fois, cela est suivant ce que vous définissez dans le composer.json)

Si vous avez une erreur comme quoi vos classes ne sont pas trouvé, ou que vous changez la config de l'autoloader, il faut régénérer l'autoloader via cette commande :
```shell
composer dump-autoload
```
