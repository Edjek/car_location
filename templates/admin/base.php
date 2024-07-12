<?php

use App\Core\Session;

$session = new Session();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/car-location/public/css/style.css">
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-light bg-light p-3">
            <a class="navbar-brand" href="#">Car Rental</a>
            <a class="nav-link" href="<?= SITE_NAME; ?>/">accueil</a>
            <a class="nav-link" href="<?= SITE_NAME; ?>/contact">contact</a>
            <a class="nav-link" href="<?= SITE_NAME; ?>/connexion">connexion</a>
            <a class="nav-link" href="<?= SITE_NAME; ?>/dashboard">dashboard</a>
        </nav>
    </header>

    <main class="container p-3">
        <?= $session->displayFlashMessage(); ?>
        <?= $content; ?>
    </main>

    <footer></footer>
</body>

</html>