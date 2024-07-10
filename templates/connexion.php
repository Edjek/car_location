<main>
<section>
    <h1>Connexion</h1>

    <div class="w-50 m-auto">
        <form action="<?= SITE_NAME; ?>/connecter" method="post">
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="pswd">Mot de passe</label>
                <input class="form-control" type="password" id="pswd" name="pswd">
            </div>
            <input type="submit" class="btn btn-primary" value="Se connecter">
        </form>
    </div>
</section>
</main>