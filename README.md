# Projet PHP POO sur 5 jours

## Introduction

Ce projet a pour objectif de vous initier à la programmation web en utilisant PHP orienté objet (POO). Vous apprendrez à structurer une application web en utilisant des concepts modernes et des bonnes pratiques. Le projet se déroulera sur 5 jours et couvrira les aspects suivants :

1. Configuration de l'application.
2. Mise en place de l'autoloading.
3. Gestion des routes.
4. Création de contrôleurs.
5. Gestion des vues.
6. Connexion à la base de données et manipulation des données.

### Fichier `.htaccess`

À la racine du site, créez un fichier `.htaccess` pour rediriger toutes les requêtes vers le fichier `public/index.php`.

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

### Fichier `index.php`

Dans le fichier `public/index.php` :

1. Appeler l'`Autoloader` pour charger les classes automatiquement.
2. Appeler le fichier de configuration pour les constantes (`env.php`).
3. Initialiser la connexion à la base de données.
4. Appeler la méthode `execute()` de la classe `Router`.

```php
<?php

require_once '../src/Core/Autoloader.php';
require_once '../config/env.php';

use App\Core\Autoloader;
use App\Core\Database;
use App\Core\Router;

Autoloader::autoload();
Database::initConnection();

$router = new Router();
$router->execute();
```

### Fichier `Router.php`

La méthode `execute()` du fichier `Router.php` :

1. Récupère l'URL.
2. Vérifie si l'URL existe dans le tableau des routes.
3. Récupère le contrôleur et la méthode à appeler.

```php
<?php

$this->add_route('/', function () {
    $this->currentController = new HomeController();
    $this->currentController->index();
});
```

### Exemple de contrôleur

Le contrôleur est appelé et la méthode est exécutée pour récupérer les données nécessaires et afficher la vue. Les contrôleurs sont stockés dans le dossier `Controllers` et héritent de la classe `AbstractController`, qui contient la méthode `render()` pour afficher la vue.

```php
<?php

class HomeController extends AbstractController
{
    public function index()
    {
        $this->render('home');
    }
}
```

### Exemple de repository

Les requêtes sont gérées dans le dossier `Repository` et les données sont récupérées et traitées dans les classes qui héritent de `AbstractRepository`, qui contient la connexion à la base de données dans la propriété `$pdo`.

```php
<?php

class UserRepository extends AbstractRepository
{
    public function getUser($id)
    {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query->fetch();
    }
}
```

## Conclusion

Ce projet vous permettra de comprendre les principes de base de la programmation web en PHP orienté objet. Vous pourrez ensuite vous lancer dans des projets plus complexes en utilisant des frameworks modernes comme Symfony ou Laravel.
