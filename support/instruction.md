# Projet Location de voiture (car-location)

## Description

Ce projet est une application web de location de voitures. Elle permet de gérer les locations de voitures, les clients et les voitures de manière efficace et intuitive.

## Fonctionnalités

-   **Gestion des clients** : Ajouter, modifier, supprimer et consulter les informations des clients.
-   **Gestion des voitures** : Ajouter, modifier, supprimer et consulter les informations des voitures disponibles à la location.
-   **Gestion des locations** : Gérer les réservations, suivre les locations en cours et historiques.

## Installation

### Prérequis

-   Serveur Apache
-   PHP Poo
-   MySQL

### Étapes d'installation

1. **Configurer le serveur Apache**

    - Assurez-vous que le serveur Apache redirige les requêtes vers le dossier `public` du projet à l'aide du fichier `.htaccess`.

    ```apacheconf
    # .htaccess
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ public/index.php?url=$1 [QSA,L]

    ```

2. **Créer un Autoloader**

    - Utilisez un autoloader pour charger les classes automatiquement.

    ```php
    // Autoloader.php
    spl_autoload_register(function ($class) {
        require_once ''.php';
    });
    ```

3. **Créer un routeur**

    - Créez un routeur pour rediriger les requêtes vers les bonnes actions.

    ```php
    // index.php
    require_once 'Autoloader.php';

    use App\Autoloader;
    use App\Router;

    Autoloader::autoload();

    $router = new Router();
    $router->execute();
    ```

4. **Créer des contrôleurs**

    - Créez des contrôleurs pour gérer les actions.

    ```php
    // Controllers/ClientController.php
    class ClientController {
        public function index() {
            // Code pour afficher la liste des clients
        }

        public function create() {
            // Code pour ajouter un client
        }

        // Autres actions...
    }
    ```

## Base de données

Le projet utilise une base de données MySQL. Suivez les étapes ci-dessous pour configurer la base de données.

### Création de la base de données

1. **Créer la base de données**

    ```sql
    CREATE DATABASE car_location;
    ```

2. **Créer les tables**

    ```sql

    -- Table Voitures
    CREATE TABLE car (
        id INT AUTO_INCREMENT PRIMARY KEY,
        model VARCHAR(255) NOT NULL,
        description TEXT,
        rental_price DECIMAL(10, 2),
        image VARCHAR(255)
    );

    ```
