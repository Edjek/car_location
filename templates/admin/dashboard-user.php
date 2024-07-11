<section>
    <h1>Dashboard des utilisateurs</h1>

    <div class="m-3 p-3 border rounded">
        <table class="table table-striped">
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user['pseudo']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['statut'] ? 'administrateur' : 'utilisateur';  ?></td>
                    <td><a class="btn btn-primary" href="<?= SITE_NAME; ?>/dashboard/users/modifier/<?= $user['id']; ?>">modifier</a></td>
                    <td><a class="btn btn-danger" href="">supprimer</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</section>