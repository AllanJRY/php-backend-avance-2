## Exercice 1 - Les Interfaces

Le but de l'exercice est de s'initier à l'utilisation d'interface.

### Partie 1
- [ ] Créer plusieurs classes au choix.
- [ ] Créer une interface nommée Debuggable et disposant d'une methode debug() qui retourne une chaine de caractères.
- [ ] Implémenter l'interface Debug sur toutes les classes
- [ ] Créer une classe DebugPrinter ayant une méthode nommée 'print' avec un paramètre de type Debuggable. Dans cette méthode, faire un echo de la méthode debug() du Debuggable passé en paramètre.
- [ ] Dans un index.php, créer un objet de chacune des classes ainsi qu'une instance de DebugPrinter et appeler la méthode print pour tous les objets.

### Partie 2
- [ ] Si ce n'est déjà pas le cas, créer des classes comportant un titre ou un nom et/ou un prénom ou tout autres attributs d'identification.
- [ ] Créer une interface Identifiable ayant une méthode getIdentity() qui retourne une chaine de caractère.
- [ ] Implementer l'interface Identifiable sur les classes ayant des attributs d'identification
- [ ] Dans l'index.php, créer des instances de toutes les classes (si ce n'est pas déjà fait) et appelé la méthode getIdentity sur chacun d'entre eux.

## Exercice 2 - Les Traits
- [ ] Créer 4 classes : User, Animal, Vehicule, Vegetation (Pour le moment, pas besoin de les déclarer abstraites)
- [ ] Créer un trait Age comprenant un attribut $dateOfBirth de type DateTime, les Getters et Setters de cet attribut et une méthode getAge() qui retournera le nombre d'années de différence entre l'attribut $dateOfBirth et la date d'aujourd'hui (N'hésitez pas à vous aider du fichier objet-datetime.php).
- [ ] Ajouter ce trait a toutes les classes, attention, il faut penser à initialiser l'attribut du trait par défaut ou dans le constructeur de la classe.
- [ ] Sur un index.php, créer des instances de vos classes avec des dates différentes et sur ces mêmes objets appeler les méthodes du trait Age.

## Exercice 3 - Système de panier orienté objet.

L'objectif de cet exercice est de créer un système de panier en orienté objet qui sera sauvegardé dans un fichier .json sur votre ordinateur au lieu d'être stocké en session.

Vous pouvez récupérer la liste des produits que vous aviez utilisés avec Maxime, mais vous devrez faire en sorte que les tableaux de vos produits deviennent des objets Product.

Aussi dans notre cas, le panier aura aussi une liste de réductions/promotions.

Ce qui est attendu :
- [ ] Au minimum 3 classes : Cart, Product et Promotion.
- [ ] Au moins un Trait (indice : Product et Promotion dispose d'un prix, même si dans le cas de la promotion, c'est la valeur de réduction appliquée)
- [ ] Définir une interface nommée JsonConvertible composé d'une méthode toJson() qui retourne une chaine de caractères ainsi qu'une méthode **static** fromJson qui prend en paramètre une chaine de caractères et retourne 'self'.
- [ ] Toutes les classes doivent implémenter l'interface JsonConvertible. Il faut essayer de définir le contenu de ses méthodes, il faudra faire en sorte d'utiliser les fonctions globales de php json_encode() et json_decode(). (Demandez de l'aide si vous bloquez, cette partie peut être assez compliquée).
- [ ] Sur un index.php, il faut instancier les classes, remplir votre panier de produits et promotion.
- [ ] Une fois fait, utilisez la classe Database fourni pour sauvegarder le panier dans un fichier et recharger le panier. (Pas besoin de retoucher la classe Database, lisez la si vous voulez comprendre son fonctionnement).

