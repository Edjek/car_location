<section>
    <div class="w-75 mx-auto mt-5 p-4 border rounded">
        <form action="<?= SITE_NAME; ?>/dashboard/cars/create-car" method="post">

            <div class="mb-3">
                <label for="name" class="form-label">Model</label>
                <input type="text" id="name" class="form-control" value="" name="user_pseudo">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <input type="submit" value="Envoyer" class="btn btn-primary">
        </form>
    </div>
</section>