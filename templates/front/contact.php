<section>
    <h1>Contact</h1>

    <div class="w-7 m-auto">
        <form action="<?= SITE_NAME; ?>/connection/soumettre" method="post">
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea id="message" name="" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Envoyer">
        </form>
    </div>
</section>