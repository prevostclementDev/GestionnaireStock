<section class="popupform" id="add-product">
    <div class="content-popup">
        <h2>Ajouter un produit</h2>
        <form action="<?= base_url('products') ?>" method="POST">
            <?= csrf_field() ?>
            <label for="">
                <input name="singular_name" type="text" placeholder="Nom au singulié...">
            </label>
            <label for="">
                <input name="plurial_name" type="text" placeholder="Nom au pluriel...">
            </label>
            <label for="">
                <input name="billing_price" step="0.01" type="number" placeholder="Prix d’achat">
            </label>
            <label for="">
                <input name="selling_price" step="0.01" type="number" placeholder="Prix de vente">
            </label>
            <label for="">
                <input name="unite" type="text" placeholder="Unité ex : Litre, metre, flacon, unité">
            </label>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</section>