<section>
    <div class="w-75 mx-auto mt-5 p-4 border rounded">
        <form action="<?= SITE_NAME; ?>/dashboard/users/modifier-user" method="post">
            <input type="hidden" name="user_id" value="<?= $user['id']; ?>" >
            <div class="mb-3">
                <label for="name" class="form-label">pseudo</label>
                <input type="text" id="name" class="form-control" value="<?= $user['pseudo']; ?>" name="user_pseudo">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" id="email" class="form-control" value="<?= $user['email']; ?>" name="user_email">
            </div>
            <div class="mb-3">
                <label for="admin" class="form-label">admin</label>
                <input type="radio" id="email" class="form-radio" value="true" name="user_statut" <?php echo ($user['statut'] == 1) ? 'checked' : ''; ?>>
                <label for="user" class="form-label">user</label>
                <input type="radio" id="statut" class="form-radio" value="false" name="user_statut" <?php echo ($user['statut'] == 0) ? 'checked' : ''; ?>>
            </div>
            <input type="submit" value="Envoyer" class="btn btn-primary">
        </form>
    </div>
</section>