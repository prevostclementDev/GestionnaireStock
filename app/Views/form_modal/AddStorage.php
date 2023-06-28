<section class="popupform" id="add-storage">
    <div class="content-popup">
        <h2>Ajouter un lieu de stockage</h2>

        <form action="<?= base_url('storages') ?>" method="POST">
            <?= csrf_field() ?>
            <label for="">
                <input name="name" type="text" placeholder="Nom du lieu de stockage...">
            </label>
            <label for="">
                <input name="adresse" type="text" placeholder="Adresse du lieu de stockage...">
            </label>
            <label for="">
                <input name="country" type="text" placeholder="Pays du lieu de stockage...">
            </label>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</section>