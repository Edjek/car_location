<section>
    <h1>Dashboard des véhicules</h1>

    <a href="<?= SITE_NAME; ?>/dashboard/cars/ajouter" class="btn btn-success my-3">Ajouter un nouveau véhicules</a>

    <!-- cette route appelle le AdminCarController -->
    <!-- qui appelle la method showCarCreateForm -->
    <!-- affiche la page : car-create-form -->
    <!-- creez le dormulaire et ensuite le traiter en creant une route de le action -->


    <div class="p-3 border rounded">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Model</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>Model</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </tfoot>
            <tbody>

                <?php
                foreach ($cars as $car) {
                ?>
                    <tr>
                        <td><?= $car['id']; ?></td>
                        <td><?= $car['model']; ?></td>
                        <td><?= $car['description']; ?></td>
                        <td><?= $car['price'] ?></td>
                        <td></td>
                        <td><a class="btn btn-primary" href="<?= SITE_NAME; ?>/dashboard/cars/modifier/<?= $car['id']; ?>">modifier</a></td>
                        <td><a class="btn btn-danger" href="">supprimer</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>