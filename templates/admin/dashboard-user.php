<section>
    <h1>Dashboard des utilisateurs</h1>

    <div class="p-3 border rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>statut</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>statut</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </tfoot>
            <tbody>

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
            </tbody>
        </table>
    </div>
</section>