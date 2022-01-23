## Exercice 1 - Les Interfaces

Le but de l'exercice est de s'initier à l'utilisation d'interface.

### Partie 1
- [x] Créer plusieurs classes au choix.
- [x] Créer une interface nommée Debuggable et disposant d'une methode debug() qui retourne une chaine de caractères.
- [x] Implémenter l'interface Debug sur toutes les classes
- [x] Créer une classe DebugPrinter ayant une méthode nommée 'print' avec un paramètre de type Debuggable. Dans cette méthode, faire un echo de la méthode debug() du Debuggable passé en paramètre.
- [x] Dans un index.php, créer un objet de chacune des classes ainsi qu'une instance de DebugPrinter et appeler la méthode print pour tous les objets.

### Partie 2
- [x] Si ce n'est déjà pas le cas, créer des classes comportant un titre ou un nom et/ou un prénom ou tout autres attributs d'identification.
- [x] Créer une interface Identifiable ayant une méthode getIdentity() qui retourne une chaine de caractère.
- [x] Implementer l'interface Identifiable sur les classes ayant des attributs d'identification
- [x] Dans l'index.php, créer des instances de toutes les classes (si ce n'est pas déjà fait) et appelé la méthode getIdentity sur chacun d'entre eux.

## Exercice 2 - Les Traits
- [x] Créer 4 classes : User, Animal, Vehicule, Vegetation (Pour le moment, pas besoin de les déclarer abstraites)
- [x] Créer un trait Age comprenant un attribut $dateOfBirth de type DateTime, les Getters et Setters de cet attribut et une méthode getAge() qui retournera le nombre d'années de différence entre l'attribut $dateOfBirth et la date d'aujourd'hui (N'hésitez pas à vous aider du fichier objet-datetime.php).
- [x] Ajouter ce trait a toutes les classes, attention, il faut penser à initialiser l'attribut du trait par défaut ou dans le constructeur de la classe.
- [ ] Sur un index.php, créer des instances de vos classes avec des dates différentes et sur ces mêmes objets appeler les méthodes du trait Age.

## Exercice 3 - Système de panier orienté objet.

L'objectif de cet exercice est de créer un système de panier en orienté objet qui sera sauvegardé dans un fichier .json sur votre ordinateur au lieu d'être stocké en session.

Vous pouvez récupérer la liste des produits que vous aviez utilisés avec Maxime, mais vous devrez faire en sorte que les tableaux de vos produits deviennent des objets Product.

Aussi dans notre cas, le panier aura aussi une liste de réductions/promotions.

Ce qui est attendu :
- [x] Au minimum 3 classes : Cart, Product et Promotion.
- [x] Au moins un Trait (indice : Product et Promotion dispose d'un prix, même si dans le cas de la promotion, c'est la valeur de réduction appliquée)
- [x] Définir une interface nommée JsonConvertible composé d'une méthode toJson() qui retourne une chaine de caractères ainsi qu'une méthode **static** fromJson qui prend en paramètre une chaine de caractères et retourne 'self'.
- [x] Toutes les classes doivent implémenter l'interface JsonConvertible. Il faut essayer de définir le contenu de ses méthodes, il faudra faire en sorte d'utiliser les fonctions globales de php json_encode() et json_decode(). (Demandez de l'aide si vous bloquez, cette partie peut être assez compliquée).
- [x] Sur un index.php, il faut instancier les classes, remplir votre panier de produits et promotion.
- [x] Une fois fait, utilisez la classe Database fourni pour sauvegarder le panier dans un fichier et recharger le panier. (Pas besoin de retoucher la classe Database, lisez la si vous voulez comprendre son fonctionnement).


## Exercice 4 - Composer, namespace et autoloader
- [ ] Créer un nouveau dossier
- [ ] Se placer dedans depuis un terminal (VS Code et Phpstorm en ont un intégré)
- [ ] Lancer la commande : ``composer init``
- [ ] Une fois fait, il faut répondre à des questions de configuration. (Voir avec moi pour les réponses que vous devez donner)
- [ ] Le projet utilise maintenant Composer, mais il faut paramétrer l'autoloader pour charger les classes, dans composer.json ajouter cette entrée si elle n'a pas déjà été généré :
```json
"autoload": {
    "psr-4": {
        "App\\": "src/" // <- défini le namespace de base pour le dossier où se trouve vos classes
    }
},
```
- [ ] Tester de créer des classes dans le dossier src en leur ajoutant un namespace (le namespace doit commencer par celui indiqué dans la config json plus haute, à savoir *App*)

- [ ] Faire ``composer require symfony/var-dumper --dev`` pour ajouter la fonction dump() de symfony dans le projet en tant que dépendance de développement.
- [ ] Ajouter twig : ``composer require twig/twig``
