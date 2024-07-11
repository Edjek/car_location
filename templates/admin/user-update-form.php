<section>
    <div class="w-75 mx-auto mt-5 p-4 border rounded">
        <form action="<?= SITE_NAME; ?>/dashboard/users/modifier/soumettre" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">pseudo</label>
                <input type="text" id="name" class="form-control" value="<?= $user['pseudo']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" id="email" class="form-control" value="<?= $user['email']; ?>">
            </div>
            <input type="submit" value="Envoyer" class="btn btn-primary">
        </form>
    </div>
</section>