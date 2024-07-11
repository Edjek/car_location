<main>
    <table>
        <?php
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $user['pseudo']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['statut'] ? 'administrateur' : 'utilisateur';  ?></td>
                <td><a class="btn btn-primary" href="<?= SITE_NAME; ?>/dashboard/user/modifier/<?= $user['id']; ?>">modifier</a></td>

                <td><a class="btn btn-danger" href="">supprimer</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>